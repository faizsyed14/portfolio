
$(document).ready(function(){
//     $('.button-1').on("click",function(){
//         var tx = $('.text_bar').val();
// });
// axios.get("https://animechan.vercel.app/api/random")
// .then(res =>{
//     console.log(res.data.anime);
// })
// $('#anime_names').innertext(res.data.anime);
$("#submited1").click( async function(event){
event.preventDefault();
var tex = $("#textcont").val();
console.log(tex); 
const res= await axios.get(`https://api.tvmaze.com/search/shows?q=${tex}`)  
console.log(res.data);
makeimages(res.data);
console.log(res.data[1].show.name)
  });
});
const makeimages =(shows)=>{
for(let result of shows){
$(".images1").append( `<div   style="width: 220px;" class="img&tex"> <img  src="${result.show.image.medium}" alt=""></img>
<p>${result.show.name}</p> </div>`)
// $(".images1").append(`<p>${result.show.name}</p>`);
  
}}
  
    
 

// $('.animes').on("click",function(){
//     anime();
// });}
// });
// const anime = async () =>{
//     // const config ={header:{Accept:'application/json'}}
//     const res = await axios.get("https://animechan.vercel.app/api/random")
//     console.log(res);
//     $('#anime_names').append('<li>'+res.data.anime+'</li>');
// }

