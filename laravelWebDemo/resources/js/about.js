document.addEventListener('DOMContentLoaded', ()=>{
     //timeline animation 
    function animation(){
        const scrollerInner=document.querySelector(".scroller_inner");
        const scrollItem=Array.from(scrollerInner.children);

        scrollItem.forEach(item=>{
            const clonedNode=item.cloneNode(true);
            scrollerInner.appendChild(clonedNode);
        })
    }
    animation();
})