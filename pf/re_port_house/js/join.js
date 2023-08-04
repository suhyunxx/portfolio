//헤더 서브메뉴
const header = document.querySelector("#header");
const logo = document.querySelector(".logo img");
const gnb = document.querySelector(".gnb");
const subGnb = document.querySelectorAll(".sub_gnb");
const subBg = document.querySelector(".gnb_bg");

const gnbSet = [gnb,subBg];


for(let i=0; i<gnbSet.length; i++)
{
    //gnb에 마우스 올리면 주황색 로고
    gnbSet[i].addEventListener("mouseenter",()=>{

        header.classList.add("on");
        logo.src = "img/orangelogo.png";

        for(let j=0; j<subGnb.length; j++){
            subGnb[j].classList.add("on");    
        }   
       
        subBg.classList.add("on");

    });
}
for(let i=0; i<gnbSet.length; i++)
{
    //gnb에 마우스 내리면 하얀색 로고
   gnbSet[i].addEventListener("mouseleave",()=>{

        header.classList.remove("on");
        logo.src = "img/rooflogo.png";
        
        for(let j=0; j<subGnb.length; j++)
        {
            subGnb[j].classList.remove("on");    
        }   
    
        subBg.classList.remove("on");

   });
}


const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 5,
    speed:800,
    autoplay: {
        delay: 2000,
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        640: {
        slidesPerView: 2,
        spaceBetween: 20
        },
        950: {
            slidesPerView: 4,
            spaceBetween: 20
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 20
        }
    }

});

//전체동의 선택시 전체 선택, 해제시 전체 해제, 하나라도 해제되면 전체동의 해제
const allInput = document.querySelector(".allInput");
const eachinput = document.querySelectorAll(".eachinput");
const labelagree = document.querySelector(".labelagree");

allInput.addEventListener("click",()=>{
    if(allInput.checked == true)
    {
        for(let i=0; i<eachinput.length; i++)
        {
            eachinput[i].checked = true;
        }
        
    }
    else
    {
        for(let i=0; i<eachinput.length; i++)
        {
            eachinput[i].checked = false;
        }
    }

});

for(let i=0; i<eachinput.length; i++)
{
    eachinput[i].addEventListener("click",()=>{

        if(eachinput[i].checked == false)
        {
            allInput.checked = false;
        }

    });
}

for(let i=0; i<eachinput.length; i++)
{
    eachinput[i].addEventListener("click",()=>{

        if(eachinput[0].checked == true && eachinput[1].checked == true)
        {
            allInput.checked = true;
        }

    });
}


//에러메시지 출력 함수
function success(input)
{
    input.className = "success";
}
function error(input,msg)
{
    input.className = "error";
    input.nextElementSibling.innerHTML = msg;
}

const userform = document.querySelector("#userform");

const id = document.querySelector("#id");
const pass = document.querySelector("#pass");
const passch = document.querySelector("#passch");
const name = document.querySelector("#name");

const birth_first = document.querySelector("#birth_first");
const birth_second = document.querySelector("#birth_second");
const birth_third = document.querySelector("#birth_third");

const gender = document.querySelector("#gender");

const email = document.querySelector("#email");
const phone = document.querySelector("#phone");

userform.addEventListener("submit",(e)=>{

    e.preventDefault();

    if(id.value === "")
    {
        error(id,"아이디가 입력되지 않았습니다.");
    }
    else if( !(id.value.length >=5 && id.value.length <=10) )
    {
        error(id,"아이디는 5자 이상 10자 이하까지 가능합니다.");
    }
    else
    {
        success(id);
    }

    if(pass.value === "")
    {
        error(pass,"비밀번호가 입력되지 않았습니다.");
    }
    else
    {
        success(pass);
    }

    if(passch.value === "")
    {
        error(passch,"비밀번호 확인란이 입력되지 않았습니다.");
    }
    else if(passch.value !== pass.value)
    {
        error(passch,"비밀번호가 같지 않습니다.");
    }
    else
    {
        success(passch);
    }

    if(name.value === "")
    {
        error(name,"이름이 입력되지 않았습니다.");
    }
    else
    {
        success(name);
    }

    if(birth_first.value === "" || birth_second.value === "" || birth_third.value === "")
    {
        error(birth_third,"생년월일이 입력되지 않았습니다.");
    }
    else
    {
        success(birth_third);
    }

    if(gender.value === "default")
    {
        error(gender,"성별이 선택되지 않았습니다");
    }
    else
    {
        success(gender);
    }

    if(email.value === "")
    {
        error(email,"이메일이 입력되지 않았습니다");
    }
    else
    {
        success(email);
    }

    if(phone.value === "")
    {
        error(phone,"전화번호가 입력되지 않았습니다");
    }
    else
    {
        success(phone);
    }

    if(allInput.checked === false)
    {
        error(labelagree,"필수약관을 체크해주세요.")
    }
    else
    {
        success(labelagree);
    }



    if(id.value !== "" && pass.value !== "" && passch.value !== "" && name.value !== "" && 
        (birth_first.value !== "" && birth_second.value !== "" && birth_third.value !== "")
        && gender.value !== "default" && email.value !== "" && phone.value !== "" && allInput.checked === true)
    {
        if(id.value.length>=5 && id.value.length <= 10 && pass.value === passch.value)
            {
                userform.submit();
            }
    }
        

});

birth_first.addEventListener("keyup",()=>{

    if(birth_first.value.length >=4)
    {
        birth_second.focus();
    }

});

birth_second.addEventListener("change",()=>{

    if(birth_second.value !== "월")
    {
        birth_third.focus();
    }

});

gender.addEventListener("change",()=>{

    if(gender.value !== "성별")
    {
        email.focus();
    }
});



console.log(labelagree.nextElementSibling);
