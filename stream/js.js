var b= document.querySelectorAll('.inner');
var a= document.querySelectorAll('.hovr');
var l= document.querySelector('.hide');
var f= document.querySelectorAll('.see');
var g;
var z;
b.forEach(b =>b.addEventListener('mouseover',(e)=> {
       e.target.classList.add("abc");  
}));
 a.forEach(a =>a.addEventListener('mouseout',(e)=> {

         for(var i=0;i<24;i++)
         {
            var c= document.querySelectorAll('.inner')[i];
            c.classList.remove("abc")
         }
    }));

    function funx(g)
    {
      var x=window.matchMedia("(max-width:415px)");
      if(x.matches){
      if(g.innerHTML=='See All'){
      g.innerHTML='See Less';
      if(g.id=='see1')
      {
         document.querySelector('#one').style.display='block';
         document.querySelector('#two').style.display='block'; 
      }
      if(g.id=='see2')
      {
         document.querySelector('#three').style.display='block';
         document.querySelector('#four').style.display='block'; 
      }
      if(g.id=='see3')
      {
         document.querySelector('#five').style.display='block';
         document.querySelector('#six').style.display='block'; 
      }
     }
      else
      {
         g.innerHTML='See All';
         if(g.id=='see1')
      {
         document.querySelector('#one').style.display='none';
         document.querySelector('#two').style.display='none'; 
      }
      if(g.id=='see2')
      {
         document.querySelector('#three').style.display='none';
         document.querySelector('#four').style.display='none'; 
      }
      if(g.id=='see3')
      {
         document.querySelector('#five').style.display='none';
         document.querySelector('#six').style.display='none'; 
      }
     }
      }
   
    }
   var h;
   var para=document.createElement('p');
   para.innerText="no more text to show... This is it...";
    function funy(h)
    {
      

      if(h.innerHTML=='Read more')
      {
         h.innerHTML='Read less';
         if(h.id=='anc1')
         {
            document.querySelector('#no').appendChild(para);
         }  
         if(h.id=='anc2')
         {
            document.querySelector('#nt').appendChild(para);  
         }
         if(h.id=='anc3')
         {
            document.querySelector('#nth').appendChild(para);
         }
            
         if(h.id=='anc4')
         {
            document.querySelector('#fo').appendChild(para);
         }
         if(h.id=='anc5')
         {
            document.querySelector('#fi').appendChild(para);
         }
      }
       else
      {
            h.innerHTML='Read more';
            if(h.id=='anc1')
         {
            document.querySelector('#no').removeChild(para);
         }
         if(h.id=='anc2')
         {
            document.querySelector('#nt').removeChild(para);
         }  
         if(h.id=='anc3')
         {
            document.querySelector('#nth').removeChild(para);
         }
         if(h.id=='anc4')
         {
            document.querySelector('#fo').removeChild(para);
         }
         if(h.id=='anc5')
         {
            document.querySelector('#fi').removeChild(para);
         }
      }
    }
    function funk(val)
    {
      var vidz;
      if(val=='st')
      {
            vidz="videos/disney.mp4";
            localStorage.setItem('pass',vidz);
      }
      if(val=='nd')
      {
            vidz="videos/pixar.mp4";
            localStorage.setItem('pass',vidz);
            console.log(val);
      }
      else if(val=='rd')
      {
            vidz="videos/marvel.mp4";
            localStorage.setItem('pass',vidz);
      }
      else if(val=='ndl')
      {
            vidz="videos/geographic.mp4";
            localStorage.setItem('pass',vidz);
      }
      else if(val=='lst')
      {
            vidz="videos/star-war.mp4"; 
            localStorage.setItem('pass',vidz);
      }
      window.location.href='play.php';
      
   
    }
     function funcc()
    {
      var sorce=document.querySelector('#vide');
      var vid=document.querySelector('#vidz');
      sorce.src=localStorage.getItem('pass');
      vid.load();  
    }

    function funj()
    {
      var p=document.querySelector('#passvalues');
      z=p.value;
      localStorage.setItem('passvalue',z);
    } 
      
    function funo()
    {
      var q=document.querySelector('#shows');
      q.innerHTML= localStorage.getItem('passvalue');
      document.querySelector('#shows').style.textTransform="capitalize";   
    }    

    function fung(movie)
    {
         if(movie.id=='oness')
            window.open("https://www.youtube.com/watch?v=oc0x-jiewTE");
         if(movie.id=='twoes')
            window.open("https://www.youtube.com/watch?v=1s9Yln0YwCw"); 
         if(movie.id=='threes')
            window.open("https://www.youtube.com/watch?v=e5wUilOeOmg");
         if(movie.id=='foursss')
            window.open("https://www.youtube.com/watch?v=WHVJVfAWrCI");
         if(movie.id=='onesghs')
            window.open("https://www.youtube.com/watch?v=P5ieIbInFpg");
         if(movie.id=='sixess')
            window.open("https://www.youtube.com/watch?v=i4noiCRJRoE");
         if(movie.id=='oneza')
            window.open("https://www.youtube.com/watch?v=v8ItGrI-Ou0");
         if(movie.id=='eights')
            window.open("https://www.youtube.com/watch?v=kkVPTLh_HY4");
         if(movie.id=='niness')
            window.open("https://www.youtube.com/watch?v=PXi3Mv6KMzY");
         if(movie.id=='tenns')
            window.open("https://www.youtube.com/watch?v=Ve_HGFCyCd8");
         if(movie.id=='elevenss')
            window.open("https://www.youtube.com/watch?v=GPaAwbveFLg");
         if(movie.id=='onesmnbvs')
            window.open("https://www.youtube.com/watch?v=MczMB8nU1sY");
         if(movie.id=='ftween')
            window.open("https://www.youtube.com/watch?v=oc0x-jiewTE");
         if(movie.id=='twelvwks')
            window.open("https://www.youtube.com/watch?v=oc0x-jiewTE");
         if(movie.id=='onesspoi')
            window.open("https://www.youtube.com/watch?v=oc0x-jiewTE");
         if(movie.id=='youyou')
            window.open("https://www.youtube.com/watch?v=O92QxxgeCO8");
         if(movie.id=='steen')
            window.open("https://www.youtube.com/watch?v=oc0x-jiewTE");
         if(movie.id=='onesqazxs')
            window.open("https://www.youtube.com/watch?v=e5wUilOeOmg");
         if(movie.id=='bgvcd')
            window.open("https://www.youtube.com/watch?v=oc0x-jiewTE");
         if(movie.id=='tywentyds')
            window.open("https://www.youtube.com/watch?v=oc0x-jiewTE");
         if(movie.id=='onessuytre')
            window.open("https://www.youtube.com/watch?v=oc0x-jiewTE");
         if(movie.id=='onesstwo')
            window.open("https://www.youtube.com/watch?v=oc0x-jiewTE");
         if(movie.id=='onessthree')
            window.open("https://www.youtube.com/watch?v=oc0x-jiewTE");
         if(movie.id=='onessfoursa')
            window.open("https://www.youtube.com/watch?v=oc0x-jiewTE");
         
    }
    
    var x= document.getElementById("login");  
    var y= document.getElementById("register");  
    var z= document.getElementById("btn");  

    function register(){
      x.style.left="-400px";
      y.style.left="50px";
      z.style.left="110px";
    }

    function login(){
      x.style.left="50px";
      y.style.left="450px";
      z.style.left="0";
    }
















