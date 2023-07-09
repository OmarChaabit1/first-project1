var sidebarIsOpen = true ; 

toggleBtn.addEventListener("click",(event)=>{
    event.preventDefault();

    if(sidebarIsOpen){

   

    dashboard_sidebar.style.width = "10%" ;
    dashboard_sidebar.style.transition = ".3s all";
    dashboard_content_container.style.width = "90%"; 
    dashboard_logo.style.fontSize = "36px";
    user_img.style.width="60px";
    menutext = document.getElementsByClassName("menutext");
    for(var i=0; i < menutext.length ; i++){
        menutext[i].style.display = "none";

    }
    document.getElementsByClassName("dashboard-menu-list")[0].style.textAlign= "center";
    sidebarIsOpen = false ;    
}
    else {
    dashboard_sidebar.style.width = "20%" ;
    dashboard_content_container.style.width = "80%"; 
    dashboard_logo.style.fontSize = "5rem";
    user_img.style.width="60px";
    menutext = document.getElementsByClassName("menutext");
    for(var i=0; i < menutext.length ; i++){
        menutext[i].style.display = "inline-block ";

    }
    document.getElementsByClassName("dashboard-menu-list")[0].style.textAlign= "left";   
    sidebarIsOpen = true ; 
}
});