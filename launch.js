gsap.to("#nav",{
    backgroundColor :"rgb(129, 17, 18)",
    fontColor:"#000",
    height:"100px",
    duration:0.5,
    scrollTrigger:{
        trigger:"#nav",
        scroll:"body",
        // markers:true,
        start:"top -10%",
        end:"top -9%",
        scrub:1
    }
})
var tl = gsap.timeline({
    scrollTrigger:{
        trigger:".button",
        scroll:"body",
        // markers:true,
        start:"top 70%",
        end:"top 69%",
        scrub:5
    }
})
tl.to(".button",{ 
    // width:"80%",
    // backgroundColor :"#000",
    duration:0.1,
   
})
tl.to(".containerpic",{
    // width:"80%",
    duration:0.1,

})
// tl.to(".maintext",{
//     // width:"80%",
//     backgroundColor :"#000",
//     duration:0.1,
// })
