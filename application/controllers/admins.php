<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('login');
        $this->load->model('page');
        $this->load->model('mobile');
        $this->load->model('tablet');
        $this->load->model('accessory');
        $this->load->model('mail');
    }

    public function index($page="home")
    {
        if(empty($this->session->userdata) || $this->session->userdata('authority')!=="admin")
        {
            $this->load->view("admin/ad_login");
        }
        else
        {
            redirect(site_url("admins/loadDash/$page"));
        }
    }


    public function  adLogin()
    {
        if(empty($_POST))
        {
            $this->load->view("admin/ad_login");
        }
        else
        {
            $email=$_POST["email"];
            $pwd=md5($_POST["pwd"]);
            if($this->login->isUserExist($email))
            {
                $data=$this->login->getUserData($email,$pwd);
                if(count($data)>0 && $data['authority']==="admin") {
                    $this->session->set_userdata("username",$data['username']);
                    $this->session->set_userdata("email",$data['email']);
                    $this->session->set_userdata("authority",$data['authority']);
                    redirect(site_url("admins"));
                }
                else{
                    echo "<script>alert('Email or Password doesn\'t match or you don\'t have enough permission')</script>";
                }
            }
            else
            {
                echo "<script>alert('User Doesn\'t Exist')</script>";
            }
        }
    }

    public function loadDash($page="home")
    {
        if(empty($this->session) || $this->session->userdata['authority']!=="admin")
        {
            redirect(site_url("admins"));
        }
        else
        {
            $data['page']=$page;
            $this->load->view("admin/dash_header",$data);
            $this->loadContent($page);
            $this->load->view("admin/dash_footer");
        }
    }

    public function loadContent($page)
    {
        switch($page)
        {
            case "home":
            {
                if(!empty($_POST) && isset($_POST['edit']))
                {
                    $header=$_POST['header'];
                    $body=$_POST['body'];
                    $this->page->updatePageData("Home Page",$header,$body);
                    echo "<script>alert('Home Page data successfully updated.'); window.location.href='".site_url('admins/loadDash/home')."'</script>";
                }
                $data['pageInfo']=$this->page->getPageInfo("Home Page");
                $data['page']=$page;
                $this->load->view("admin/dash_home",$data);
                break;
            }
            case "aboutus":
            {
                if(!empty($_POST) && isset($_POST['edit']))
                {
                    $header=$_POST['header'];
                    $body=$_POST['body'];
                    $this->page->updatePageData("AboutUs Page",$header,$body);
                    echo "<script>alert('About Us Page data successfully updated.'); window.location.href='".site_url('admins/loadDash/aboutus')."'</script>";

                }
                $data['pageInfo']=$this->page->getPageInfo("AboutUs Page");
                $data['page']=$page;
                $this->load->view("admin/dash_aboutus",$data);
                break;
            }
          case "mobile":
            {
                $data['mobile_list']=$this->mobile->getMobile();
                $data['page']=$page;
                $this->load->view("admin/dash_mobile",$data);
                break;
            }
         case "tablet":
            {
                $data['tablet_list']=$this->tablet->getTablet();
                $data['page']=$page;
                $this->load->view("admin/dash_tablet",$data);
                break;
            }
         case "accessory":
            {
                $data['accessory_list']=$this->accessory->getTablet();
                $data['page']=$page;
                $this->load->view("admin/dash_accessory",$data);
                break;
            }
         case "inbox":
            {
                $data['mail_list']=$this->mail->getMail();
                $data['page']=$page;
                $this->load->view("admin/dash_inbox",$data);
                break;
            }
        }
    }

    public function newMobile()
    {
        $this->load->view("admin/process/new_mobile");
    }

    public function newTablet()
    {
        $this->load->view("admin/process/new_tablet");
    }

    public function newAccessory()
    {
        $this->load->view("admin/process/new_accessory");
    }

    public function mailBack($id)
    {
        $temp=$this->mail->getMail($id);
        $data['mail']=$temp;
        $this->load->view('admin/process/mailBack',$data);
    }

    public function reply($id)
    {
        if(!empty($_POST))
        {
            $sender='techspecs@gmail.com';
            $receiver=$_POST['email'];
            $subject=$_POST['subject'];
            $msg=$_POST['msg'];

            if(mail($receiver, stripslashes($subject), stripslashes($msg), $sender))
            {
                echo "<script>alert('Mail sent successfully'); window.location.href='".site_url('admins/loadDash/inbox').";</script>";
            }
            else{
                echo "<script>alert('Error in sending mail'); window.location.href='".site_url('admins/mailBack/'.$id)."';</script>";
            }

        }

    }

    public function deleteMail($id)
    {
        $this->mail->delete($id);
        echo "<script>alert('Mail removed'); window.location.href='".site_url('admins/loadDash/inbox')."';</script>";
    }


    public function addMobile()
    {
        $data=array('name' => $_POST['name'],
            'brand'=>$_POST['brand'],
            'launch'=>$_POST['launch'],
            'price' =>$_POST['price'],
            'network'=>$_POST['network'],
            'body'=>$_POST['body'],
            'display'=>$_POST['display'],
            'platform'=>$_POST['platform'],
            'sensor'=>$_POST['sensor'],
            'camera'=>$_POST['camera'],
            'sound'=>$_POST['sound'],
            'battery'=>$_POST['battery'],
            'filename'=>$_FILES["myFile"]["name"]);
        $id=$this->mobile->insert($data);
        $status=$this->uploadImage($id,'mob');
        if($status=="") {
            echo "<script>alert('New mobile data inserted'); window.location.href='".site_url('admins/newMobile')."';</script>";
        }
    }

    public function addTablet()
    {
        $data=array('name' => $_POST['name'],
            'brand'=>$_POST['brand'],
            'launch'=>$_POST['launch'],
            'price' =>$_POST['price'],
            'network'=>$_POST['network'],
            'body'=>$_POST['body'],
            'display'=>$_POST['display'],
            'platform'=>$_POST['platform'],
            'sensor'=>$_POST['sensor'],
            'camera'=>$_POST['camera'],
            'sound'=>$_POST['sound'],
            'battery'=>$_POST['battery'],
            'filename'=>$_FILES["myFile"]["name"]);
        $id=$this->tablet->insert($data);
        $status=$this->uploadImage($id,'tab');
        if($status=="") {
            echo "<script>alert('New tablet data inserted'); window.location.href='".site_url('admins/newTablet')."';</script>";
        }
    }

    public function addAccessory()
    {
        $data=array('name' => $_POST['name'],
            'type'=>$_POST['type'],
            'price' =>$_POST['price'],
            'description'=>$_POST['description'],
            'scope'=>$_POST['scope'],
            'filename'=>$_FILES["myFile"]["name"]);
        $id=$this->accessory->insert($data);
        $status=$this->uploadImage($id,'acc');
        if($status=="") {
            echo "<script>alert('New accessory data inserted'); window.location.href='".site_url('admins/newAccessory')."';</script>";
        }
    }

    public function uploadImage($id, $sp)
    {
        $err = "";
        $path = './images/uploads';
        $filename = $_FILES["myFile"]["name"];
        $full = $path . "/full/full_".$sp . $id . "_" . $filename;
        $prev = $path . "/prev/prev_".$sp. $id . "_" . $filename;
        $thumb = $path . "/thumb/thumb_".$sp. $id . "_" . $filename;

        if (($_FILES["myFile"]["type"] == "image/gif" || $_FILES["myFile"]["type"] == "image/jpeg" || $_FILES["myFile"]["type"] == "image/png") && ($_FILES["myFile"]["size"] < 2000000)) {
            if ($_FILES["myFile"]["error"] > 0) {
                $err = "Error Code: " . $_FILES["myFile"]["error"] . "<br />";
                echo "<script>alert('" . $err . "')</script>";
                exit;
            } else {
                if (file_exists("$full" . $_FILES["myFile"]["name"])) {
                    echo "<script>alert('File Already Exits')</script>";
                    $err='File Already Exits';
                } else {
                    //resize_images
                    $thumb_tmp = imagecreatetruecolor(50, 90);
                    $prev_tmp = imagecreatetruecolor(200, 290);

                    $image = imagecreatefromjpeg($_FILES["myFile"]["tmp_name"]);
                    list($w, $h) = getimagesize($_FILES["myFile"]["tmp_name"]);

                    imagecopyresampled($thumb_tmp, $image, 0, 0, 0, 0, 50, 90, $w, $h);
                    imagecopyresampled($prev_tmp, $image, 0, 0, 0, 0, 200, 290, $w, $h);

                    imagejpeg($thumb_tmp, $thumb, 100);
                    imagejpeg($prev_tmp, $prev, 100);

                    move_uploaded_file($thumb, $thumb);
                    move_uploaded_file($prev, $prev);
                    move_uploaded_file($_FILES["myFile"]["tmp_name"], $full);
                    $err = '';
                }
            }
        } else {
            echo "<script>alert('Invalid File')</script>";
            $err = 'Invalid File';
        }
        return $err;
    }

    public function editMobile($id)
    {
        $data['mobile']=$this->mobile->getMobile($id);
        $this->load->view("admin/process/edit_mobile",$data);
    }

    public function editTablet($id)
    {
        $data['tablet']=$this->tablet->getTablet($id);
        $this->load->view("admin/process/edit_tablet",$data);
    }
    public function editAccessory($id)
    {
        $data['accessory']=$this->accessory->getTablet($id);
        $this->load->view("admin/process/edit_accessory",$data);
    }

    public function updateMobile($id)
    {
        if(!empty($_POST)) {
            $data = array('name' => $_POST['name'],
                'brand' => $_POST['brand'],
                'launch' => $_POST['launch'],
                'price' => $_POST['price'],
                'network' => $_POST['network'],
                'body' => $_POST['body'],
                'display' => $_POST['display'],
                'platform' => $_POST['platform'],
                'sensor' => $_POST['sensor'],
                'camera' => $_POST['camera'],
                'sound' => $_POST['sound'],
                'battery' => $_POST['battery']);
            $this->mobile->update($id,$data);
            echo "<script>alert('Mobile data updated'); window.location.href='".site_url('admins/loadDash/mobile')."';</script>";
        }
    }

    public function updateTablet($id)
    {
        if(!empty($_POST)) {
            $data = array('name' => $_POST['name'],
                'brand' => $_POST['brand'],
                'launch' => $_POST['launch'],
                'price' => $_POST['price'],
                'network' => $_POST['network'],
                'body' => $_POST['body'],
                'display' => $_POST['display'],
                'platform' => $_POST['platform'],
                'sensor' => $_POST['sensor'],
                'camera' => $_POST['camera'],
                'sound' => $_POST['sound'],
                'battery' => $_POST['battery']);
            $this->tablet->update($id,$data);
            echo "<script>alert('Tablet data updated'); window.location.href='".site_url('admins/loadDash/tablet')."';</script>";
        }
    }

    public function updateAccessory($id)
    {
        if(!empty($_POST)) {
            $data = array('name' => $_POST['name'],
                'type'=>$_POST['type'],
                'price' =>$_POST['price'],
                'description'=>$_POST['description'],
                'scope'=>$_POST['scope']);
            $this->accessory->update($id,$data);
            echo "<script>alert('Accessory data updated'); window.location.href='".site_url('admins/loadDash/accessory')."';</script>";
        }
    }

    public function removeMobile($id,$filename)
    {
        $this->mobile->delete($id);
        unlink('./images/uploads/full/full_mob'.$id.'_'.$filename);
        unlink('./images/uploads/prev/prev_mob'.$id.'_'.$filename);
        unlink('./images/uploads/thumb/thumb_mob'.$id.'_'.$filename);
        echo "<script>alert('Mobile removed'); window.location.href='".site_url('admins/loadDash/mobile')."';</script>";
    }

    public function removeTablet($id,$filename)
    {
        $this->tablet->delete($id);
        unlink('./images/uploads/full/full_tab'.$id.'_'.$filename);
        unlink('./images/uploads/prev/prev_tab'.$id.'_'.$filename);
        unlink('./images/uploads/thumb/thumb_tab'.$id.'_'.$filename);
        echo "<script>alert('Tablet removed'); window.location.href='".site_url('admins/loadDash/tablet')."';</script>";
    }

    public function removeAccessory($id,$filename)
    {
        $this->accessory->delete($id);
        unlink('./images/uploads/full/full_acc'.$id.'_'.$filename);
        unlink('./images/uploads/prev/prev_acc'.$id.'_'.$filename);
        unlink('./images/uploads/thumb/thumb_acc'.$id.'_'.$filename);
        echo "<script>alert('Accessory removed'); window.location.href='".site_url('admins/loadDash/accessory')."';</script>";
    }


}

