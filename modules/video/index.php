<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html 5 video </title>
</head>
<body>
<h1>Adding captions and subtitles to HTML videos</h1>
    <p>We using <b>HTMLMediaElement</b> and <b>window.fullScreen</b> APIs,</p>
    <p>This  guide will show how to add <b>captions </b> and <b>subtitles</b> using the <b> WebVTT formart</b> and the <b> track </b>element.</p>
    <h2>Captions versus subtitles</h2>
    <p>Caption and subtitles are not the same thing.</p>
    <ul>
        <li><h3>captions</h3></li>
        <li>Are intended for deaf and hard-of-hearing audiences</li>
        <li>Captions move to denote who is speaking</li>
        <li>Captions can explicity state the speakers name</li>
        <li>Captions notate sound effects and other dramatically significant audio.</li>

    </ul>
    <i>They are however implemented in the same way technically</i>

    <h3>The <b>track</b> element</h3>
    <p>Its the html element that allows us to specify subtitles for a video</p>

    <h3><b>WebVTT</b></h3>
    <p>Text file that follow a specified format (Web Video Text Tracks)</p>

    <p>Many Video comes with subtitle formart of <b>.srt</b> format, but this can be easly converted by online converter of any tools</p>
    <li> <a href="https://subtitlestranslator.com/en/multiple-language-subtitles-translator.php">Online Converter source 1</a></li>

    <h3>Example-1</h3>
    <video id="video" width="900px"  controls preload="metadata" muted>
        <source src="videos/Shaft.2019.REPACK.720p.BluRay.x264.AAC-[YTS.MX].mp4" type="video/mp4">

        <track 
            label="Swahili"
            kind="subtitles"
            srclang="sw"
            src="subtitles/Shaft.2019.REPACK.720p.BluRay.x264.AAC-YTS.MX.sw.vtt"
            default />

        <track
            label="English"
            kind="subtitles"
            srclang="en"
            src="subtitles/Shaft.2019.REPACK.720p.BluRay.x264.AAC-YTS.MX.vtt"
                 />
    </video>
    <div id="video-control" class="controls" data-state="hidden">
        <button id="playpause" type="button" data-state="play">Play/Pause</button>
        <button id="stop" type="button" data-state="stop">Stop</button>
        <div class="progress">
            <progress id="progress" value="0" min="0">
                <span id="progress-bar"></span>
            </progress>
        </div>
        <button id="mute" type="button" data-state="mute">Mute/Unmute</button>
        <button id="volinc" type="button" data-state="volup">Vol+</button>
        <button id="voldown" type="button" data-state="voldec">Vol-</button>
        <button id="fs" type="button" data-state="go-fullscreen">Fullscreen</button>
        <button id="subtitles" type="button" data-state="subtitles">CC</button>
    </div>
</body>
</html>
<style>
    span {
        background-color: darkgoldenrod;
        color: white;
        font-weight: bolder;
        padding: 1px;
        
    }
    ul {
        padding: 10px;
    }

    ul li {
       padding: 5px; 
    }
    .html {
        border: 1px solid red;
    }
    .css {
        border: 1px solid blue;
    }

    .js {
        border: 1px solid green;
    }

    .controls button[data-state="subtitles"] {
        height: 85%;
        text-indent: 0;
        font-size: 16px;
        font-size: 1rem;
        font-weight: bold;
        color: #666;
        background: #000;
        border-radius: 2px;
    }

    .subtitles-menu {
  display: none;
  position: absolute;
  bottom: 14.8%;
  right: 20px;
  background: #666;
  list-style-type: none;
  margin: 0;
  width: 100px;
  padding: 10px;
}

.subtitles-menu li {
  padding: 0;
  text-align: center;
}

.subtitles-menu li button {
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
  width: 90%;
  padding: 2px 5px;
  border-radius: 2px;
}


</style>

<script>
   const subtitles = document.getElementById("subtitles");

   // turning off all subtitles, in case the browser turns any of them.

   for (let i = 0; i< video.textTracks.length; i++){
    console.log(video.textTracks.length);
    video.textTracks[i].mode = "hidden";
   }

   subtitles.addEventListener("click", (e) => {
  if (subtitlesMenu) {
    subtitlesMenu.style.display =
      subtitlesMenu.style.display === "block" ? "none" : "block";
  }
});
   let subtitlesMenu;
if (video.textTracks) {
  const df = document.createDocumentFragment();
  const subtitlesMenu = df.appendChild(document.createElement("ul"));
  subtitlesMenu.className = "subtitles-menu";
  subtitlesMenu.appendChild(createMenuItem("subtitles-off", "", "Off"));
  for (let i = 0; i < video.textTracks.length; i++) {
    subtitlesMenu.appendChild(
      createMenuItem(
        `subtitles-${video.textTracks[i].language}`,
        video.textTracks[i].language,
        video.textTracks[i].label
      )
    );
  }
  videoContainer.appendChild(subtitlesMenu);
}

const subtitleMenuButtons = [];
function createMenuItem(id, lang, label) {
  const listItem = document.createElement("li");
  const button = listItem.appendChild(document.createElement("button"));
  button.setAttribute("id", id);
  button.className = "subtitles-button";
  if (lang.length > 0) button.setAttribute("lang", lang);
  button.value = label;
  button.setAttribute("data-state", "inactive");
  button.appendChild(document.createTextNode(label));
  button.addEventListener("click", (e) => {
    // Set all buttons to inactive
    subtitleMenuButtons.forEach((button) => {
      button.setAttribute("data-state", "inactive");
    });

    // Find the language to activate
    const lang = button.getAttribute("lang");
    for (let i = 0; i < video.textTracks.length; i++) {
      // For the 'subtitles-off' button, the first condition will never match so all will subtitles be turned off
      if (video.textTracks[i].language === lang) {
        video.textTracks[i].mode = "showing";
        button.setAttribute("data-state", "active");
      } else {
        video.textTracks[i].mode = "hidden";
      }
    }
    subtitlesMenu.style.display = "none";
  });
  subtitleMenuButtons.push(button);
  return listItem;
}





</script>