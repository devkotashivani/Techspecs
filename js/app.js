(function(){
   var app=angular.module('store',[]);

   app.controller('PanelController',function(){
		this.tab=1;
		this.selectTab=function(selTab){
			this.tab=selTab;
		};
		this.isSelected=function(checkTab){
			return this.tab===checkTab;
		}
   });

})();