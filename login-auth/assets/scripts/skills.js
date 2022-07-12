$(function() {
    i=0;
$('.slick').slick({infinite: false});
$('.slick-next').click(function(){
if (i<2) {
    $(`.p${i}`).toggle();
    i++;
    $(`.p${i}`).toggle();    
} 
});
$('.slick-prev').click(function(){
if (i>0) {
    $(`.p${i}`).toggle();
    i--;
    $(`.p${i}`).toggle();
}
});

});