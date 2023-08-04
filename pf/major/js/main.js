$(document).ready(function(){
    
  const main_company = document.querySelector(".main_company");

  const num_plus1 = document.querySelector(".num_plus1");
  const num_plus2 = document.querySelector(".num_plus2");
  const num_plus3 = document.querySelector(".num_plus3");
  const num_plus4 = document.querySelector(".num_plus4");
  let main_company_top = main_company.offsetTop;

  let num1 = 0;
  let num2 = 0;
  let num3 = 0;
  let num4 = 0;

  let id0 = setInterval(() => {
      
    if(num1 > 21)
    {
      clearInterval(id1);
    }
    else
    {

      num_plus1.innerHTML = num1;
    }
    num1++;

}, 119.047);

let id1 = setInterval(() => {
      
  if(num2 > 32)
  {
    clearInterval(id1);
  }
  else
  {

    num_plus2.innerHTML = num2;
  }
  num2++;

}, 78.125);

let id2 = setInterval(() => {
      
  if(num3 > 700)
  {
    clearInterval(id2);
  }
  else
  {

    num_plus3.innerHTML = num3;
  }
  num3++;

}, 3.5714);

let id3 = setInterval(() => {
      
  if(num4 > 10456)
  {
    clearInterval(id3);
  }
  else
  {

    num_plus4.innerHTML = num4;
  }
  num4= num4 + 8;

}, 0.239097);

  window.addEventListener("scroll",function(){
  
    let sctop = window.scrollY;
    
    if(sctop > main_company_top)
    {
      if(num1 > 21)
      {
        clearInterval(id0);
      }
      else
      {
          let id0 = setInterval(() => {
      
            if(num1 > 21)
            {
              clearInterval(id0);
            }
            else
            {
              let id0 = setInterval(() => {
      
                if(num1 > 21)
                {
                  clearInterval(id1);
                }
                else
                {
            
                  num_plus1.innerHTML = num1;
                }
                num1++;
            
            }, 119.047);
            }
            num1++;
        
        }, 119.047);
      }
    }

  });

  window.addEventListener("scroll",function(){
  
    let sctop = window.scrollY;
    
    if(sctop > main_company_top)
    {
      if(num2 > 32)
      {
        clearInterval(id1);
      }
      else
      {
          let id1 = setInterval(() => {
      
            if(num2 > 32)
            {
              clearInterval(id1);
            }
            else
            {
        
              num_plus2.innerHTML = num2;
            }
            num2++;
        
        }, 78.125);
      }
    }

  });

  window.addEventListener("scroll",function(){
  
    let sctop = window.scrollY;
    
    if(sctop > main_company_top)
    {
      if(num3 > 32)
      {
        clearInterval(id2);
      }
      else
      {
          let id2 = setInterval(() => {
      
            if(num3 > 700)
            {
              clearInterval(id2);
            }
            else
            {
        
              num_plus3.innerHTML = num3;
            }
            num3++;
        
        }, 3.5714);
      }
    }

  });


  window.addEventListener("scroll",function(){
  
    let sctop = window.scrollY;
    
    if(sctop > main_company_top)
    {
      if(num4 > 10456)
      {
        clearInterval(id3);
      }
      else
      {
          let id3 = setInterval(() => {
      
            if(num4 > 10456)
            {
              clearInterval(id3);
            }
            else
            {
        
              num_plus4.innerHTML = num4;
            }
            num4= num4 + 8;
        
        }, 0.239097);
      }
    }

  });
  
    const movetxt_wrap = document.querySelector(".movetxt_wrap");
    const movetxt1 = document.querySelector(".movetxt1");

    let main_company_oft = document.querySelector(".main_company").offsetTop;

    window.addEventListener("scroll",function(){
      
      let sctop = window.scrollY;
      
      if(sctop >= main_company_oft + 100)
      {
        movetxt_wrap.classList.add("on");
      }
      else
      {
        movetxt_wrap.classList.remove("on");
      }
    });

    const personal_information = document.querySelector(".personal_information");
    const personal_close_btn = document.querySelector(".personal_information_close");
    const privacy_pop = document.querySelector(".privacy_pop");

    privacy_pop.addEventListener("click",function(e){
      
      e.preventDefault();
      personal_information.style.visibility = "visible";
    });
	
    personal_close_btn.addEventListener("click",function(e){
      
      e.preventDefault();
      personal_information.style.visibility = "hidden";
    });
	
});

