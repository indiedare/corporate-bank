let fade_in_from = 0;
let fade_out_from = 10;

function fadeIn(element) {
    let target = document.getElementById(element);
    target.style.display = "block";
    let newSetting = fade_in_from / 10;
    target.style.opacity = newSetting;
    // opacity ranges from 0 to 1
    fade_in_from++;
    if (fade_in_from == 10) {
        target.style.opacity = 1;
        clearTimeout(loopTimer);
        fade_in_from = 0;
        return false;
    }
    let loopTimer = setTimeout('fadeIn(\'' + element + '\')', 50);
}

function fadeOut(element) {
    let target = document.getElementById(element);
    let newSetting = fade_out_from / 10;
    target.style.opacity = newSetting;
    fade_out_from--;
    if (fade_out_from == 0) {
        target.style.opacity = 0;
        target.style.display = "none";
        clearTimeout(loopTimer);
        fade_out_from = 10;
        return false;
    }
    let loopTimer = setTimeout('fadeOut(\'' + element + '\')', 50);

}