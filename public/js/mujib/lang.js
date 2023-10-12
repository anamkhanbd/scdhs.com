window.onload = function() {
    if (window.localStorage.getItem('lang') === 'bn')
        localSaveBangla()

    else localSaveEnglish()
};

function localSaveEnglish() {
    // window.localStorage.setItem('lang', 'en')
    // const bn = document.getElementsByClassName('bn')
    // for (let i = 0; i < bn.length; i++)
    //     bn[i].style.display = "none"
    // const en = document.getElementsByClassName('en')
    // for (let i = 0; i < en.length; i++)
    //     en[i].style.display = "block"
}

function localSaveBangla() {
    // window.localStorage.setItem('lang', 'bn')
    // const bn = document.getElementsByClassName('bn')
    // for (let i = 0; i < bn.length; i++)
    //     bn[i].style.display = "block"
    // const en = document.getElementsByClassName('en')
    // for (let i = 0; i < en.length; i++)
    //     en[i].style.display = "none"
}

function dont_change_style() {
    const ob = document.getElementsByClassName('btn mb-2 ')
        //ob.style.background = 
}