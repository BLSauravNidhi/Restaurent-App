const dropdownBtn = document.getElementsByClassName('dropdown-btn');

Array.from(dropdownBtn).forEach((element)=>{
    element.addEventListener("click" , function(e){
        // selecting ul and arrows svg 
        arrowUp = e.target.children[1].getElementsByTagName('svg')[0];
        arrowDown = e.target.children[1].getElementsByTagName('svg')[1];
        dropdownList = e.target.parentNode.getElementsByTagName('ul')[0];

        // changing arrow and showing dropdown list 
        dropdownList.classList.toggle('sidenav-ul');
        arrowUp.classList.toggle('hide-arrow');
        arrowDown.classList.toggle('show-arrow');
    })
})