console.log('Hello my children !');
try {
/*  if (document.title==="Autre Page (pour les 2)") {*/
    document.getElementById("nav-p2").style.border="solid 8px rgb(173, 118 ,201)"
    /*}*/ 
} catch {
  console.log('MRD pas cet id-iot ICI !!! :P');
}
/* with proper condition, no Try Catch. */
if (document.title==="Autre Page (pour les 2)") {
  /*const img_url=url("./img_dan2-2.png");*/
  document.getElementsByTagName("body")[0].style.backgroundImage='linear-gradient(to left, transparent, rgb(44, 8, 83) 100%), url(./img_dan2-2.png)';
  /*document.getElementsByTagName("body")[0].style.backgroundImage.concat("HS"); */
  console.log(document.getElementsByTagName("body")[0].style.backgroundImage)
}
  /*, ;";*/




