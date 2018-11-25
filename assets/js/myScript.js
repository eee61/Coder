
/*
显示隐藏按钮
*/
window.onload=hide;   /*一开始执行hide()方法，将二级标题隐藏*/
/*用js实现二级标题*/
     function show(_this){
         var t2=_this.getElementsByClassName("t2");  /*选取_this下的class="t2"的元素*/
         t2[0].style.display = "block";  /*因为通过class获取可能有很多个元素，所以会保存成数组*/
     }
    function hide(){
         var t2=document.getElementsByClassName("t2");
         for(var i=0;i<t2.length;i++){
             t2[i].style.display ="none";
         }
     }
