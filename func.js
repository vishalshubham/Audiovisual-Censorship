    var video, play, seekslider, curtimetext, durtimetext;
    
    function initializePlayer() {
		video = document.getElementById("video1");
        play = document.getElementById("play");
		seekslider = document.getElementById("seekslider");
		curtimetext = document.getElementById("curtimetext");
		durtimetext = document.getElementById("durtimetext");

		// Event listeners
		seekslider.addEventListener("change",vidSeek,false);
		video.addEventListener("timeupdate",seektimeupdate,false);
		video.addEventListener("timeupdate",operations,false);
	}

    window.onload = initializePlayer;
		
    function vidplay() {
       	if (video.paused) {
        	video.play();
          	play.textContent = "¦¦";
       	} else {
          	video.pause();
          	play.textContent = "? ";
       	}
    }

    function restart() {
        video.currentTime = 0;
    }

    function skip(value) {
		video.currentTime += value;
    }      

    function endvideo() {
		video.currentTime = video.duration - 10;	
    }

    function vidSeek(){
		var seekto = video.duration * (seekslider.value / 100);
		video.currentTime = seekto;
    }

    function operations(){

		if (video.currentTime > 5 && video.currentTime < 25){
	    	video.currentTime = 26;
		}

		if (video.currentTime > 30 && video.currentTime < 40){
	    	video.muted = true;
		}
		else{
	    	video.muted = false;
		}
    }

    function seektimeupdate(){
		var nt = video.currentTime * (100 / video.duration);
		seekslider.value = nt;
		var curmins = Math.floor(video.currentTime / 60);
		var cursecs = Math.floor(video.currentTime - curmins * 60);
		var durmins = Math.floor(video.duration / 60);
		var dursecs = Math.floor(video.duration - durmins * 60);
		if(cursecs < 10){ cursecs = "0"+cursecs; }
		if(dursecs < 10){ dursecs = "0"+dursecs; }
		if(curmins < 10){ curmins = "0"+curmins; }
		if(durmins < 10){ durmins = "0"+durmins; }
		curtimetext.innerHTML = curmins+":"+cursecs;
		durtimetext.innerHTML = durmins+":"+dursecs;
    }

    function setstart(){
	if((endtime.innerHTML >= video.currentTime) || (endtime.innerHTML == "00:00")){
    		starttime.innerHTML = video.currentTime;
	}
    }

    function setend(){
	if(starttime.innerHTML <= video.currentTime){
    		endtime.innerHTML = video.currentTime;
	}
    }    

