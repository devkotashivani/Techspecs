<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forums extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('forum');
    }

    public function index($start=0)
    {
        $data['posts']=$this->forum->getTopic(5,$start);
        $config['base_url']=site_url("forums/index");
        $config['total_rows']=$this->forum->getTopicCount();
        $config['per_page']=5;
        if($config['total_rows']>5) {
            $this->pagination->initialize($config);
            $data['pages'] = $this->pagination->create_links();
        }
        else
        {
            $data['pages']="";
        }
        $data['sn']=1;
        $this->load->view('forum/header');
        $this->load->view('forum/view_topic',$data);
        $this->load->view('forum/footer');
    }

    public function createTopic()
    {
        $this->load->view('forum/header');
        $this->load->view('forum/create_topic');
        $this->load->view('forum/footer');
    }
    public function viewTopics($topicId)
    {
        $this->forum->incrementViews($topicId);
        redirect(site_url("forums/newReply/$topicId"));
    }


    public function addTopic()
    {
        if (!empty($_POST)) {
            $topic = $_POST['topic'];
            $detail = $_POST['detail'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $this->forum->insertTopic($topic, $detail, $name, $email);

            echo "<script>alert('Topic successfully created!');</script>";
            $this->createTopic();
        }
    }


    public function newReply($topicId,$start=0)
    {
        $data['topic']=$this->forum->readTopic($topicId);
        $data['reply']=$this->forum->getReply($topicId);
        $this->load->view('forum/header');
        $this->load->view('forum/new_reply',$data);
        $this->load->view('forum/footer');
    }

    public function addReply($topicId)
    {
        if (!empty($_POST)) {
            $a_name = $_POST['a_name'];
            $a_email = $_POST['a_email'];
            $a_answer = $_POST['a_answer'];
            $this->forum->insertReply($topicId,$a_name, $a_email, $a_answer);
            redirect(site_url("forums/newReply/$topicId"));
        }
    }


}

