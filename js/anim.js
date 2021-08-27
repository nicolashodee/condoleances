console.log("gsap est là mnt"); 

setTimeout(function(){  

    const rightBlocks = gsap.utils.toArray('.anim');
    console.log(rightBlocks);

    rightBlocks.forEach(block => {
      const animRight = gsap.from(block, { ease: Power2. easeOut, x: -80, opacity: 0, paused: true});
      
      ScrollTrigger.create({
        trigger: block,
        start: "top 80%",
        onEnter: () => animRight.play()
      });
      
      ScrollTrigger.create({
        trigger: block,
        start: "top 80%",
        onLeaveBack: () => animRight.reverse()
      });
    });

}, 500);