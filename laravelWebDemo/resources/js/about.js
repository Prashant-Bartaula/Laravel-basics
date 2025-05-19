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

    const scrollItem=document.querySelectorAll(".scroll-item");
    const timelineContentClose=document.getElementById("timeline-content-close-button");

   scrollItem.forEach(item=>{
        const imageSrc=item.getElementsByTagName("img")[0].src;
        const date=item.getElementsByTagName("h1")[0].innerText;
        const title=item.getElementsByTagName("h2")[0].innerText;
        const content=item.getElementsByTagName("div")[1].innerText;

        item.addEventListener("click",()=>{
            const timelineContentWrapper=document.getElementById("timeline-content-wrapper");
            timelineContentWrapper.style.display="block";

            const timelineContentTitle=document.getElementById("timeline-content-title");
            const timelineContentDate=document.getElementById("date");
            const timelineContentImage=document.getElementById("timeline-content-image");
            const timelineContentHiddenContent=document.getElementById("timeline-content-hidden-content");
            timelineContentTitle.innerText=title;
            timelineContentDate.innerText=date;
            timelineContentImage.children[0].src=imageSrc;
            timelineContentHiddenContent.innerText=content;
        })

   })

   timelineContentClose.addEventListener("click",()=>{
        const timelineContentWrapper=document.getElementById("timeline-content-wrapper");
        timelineContentWrapper.style.display="none";
   })
})