function firstLetterUpper(theString) {
  var newString = theString.toLowerCase().replace(/(^\s*\w|[\.\!\?]\s*\w)/g,function(c){return c.toUpperCase()});
  return newString;
}

function sc() {
  var theString = document.getElementById('text').value;
  if (theString=="") {
    toastr["error"]("No text to convert.", "Error!");
  }
  else
  {
    var newString = firstLetterUpper(theString);
  //console.log("Converted: "+newString);
  document.getElementById('text').value = newString;
  toastr["success"]("Your text has been converted.", "Success!");
  }
  //alert(theString);
  
}
  function tc() {
    var text=document.getElementById('text').value;
    if (text=="") {
    toastr["error"]("No text to convert.", "Error!");
  }
  else
  {
    var sentence = text.toLowerCase().split(" ");
    for(var i = 0; i< sentence.length; i++){
      sentence[i] = sentence[i][0].toUpperCase() + sentence[i].slice(1);
    }
    document.getElementById('text').value=sentence.join(" ");
    toastr["success"]("Your text has been converted.", "Success!");
  }
    
  }
  function lc()
  {
    var text=document.getElementById('text').value;
    if (text=="") {
    toastr["error"]("No text to convert.", "Error!");
  }
  else
  {

    var sentence = text.toLowerCase().split(" ");
    document.getElementById('text').value=sentence.join(" ");
    toastr["success"]("Your text has been converted.", "Success!");
  }
    
  }
  function uc()
  {
    var text=document.getElementById('text').value;
    if (text=="") {
    toastr["error"]("No text to convert.", "Error!");
  }
  else
  {
    var sentence = text.toUpperCase().split(" ");
    document.getElementById('text').value=sentence.join(" ");
    toastr["success"]("Your text has been converted.", "Success!");
  }
    
  }
  function cc()
  {
    var text=document.getElementById('text').value;
    if (text=="") {
    toastr["error"]("No text to convert.", "Error!");
  }
  else
  {
    let wordsArray = text.toLowerCase().split(' ');
    let capsArray = [];

    wordsArray.forEach(word => {
        capsArray.push(word[0].toUpperCase() + word.slice(1))
    });

    document.getElementById('text').value= capsArray.join(' ');
    toastr["success"]("Your text has been converted.", "Success!");
  }
    
  }
  function ac() {
    var text=document.getElementById('text').value;
    if (text=="") {
    toastr["error"]("No text to convert.", "Error!");
  }
  else
  {
    var chars = text.toLowerCase().split("");
    for (var i = 0; i < chars.length; i += 2) {
      chars[i] = chars[i].toUpperCase();
    }
  document.getElementById('text').value=chars.join("");
  toastr["success"]("Your text has been converted.", "Success!");
  }
    
}
function ic() {
  var text=document.getElementById('text').value;
  if (text=="") {
    toastr["error"]("No text to convert.", "Error!");
  }
  else
  {
    var ans = text.split('').map(function(c){
  return c === c.toUpperCase()
  ? c.toLowerCase()
  : c.toUpperCase()
}).join('')
   
    document.getElementById('text').value = ans;
    toastr["success"]("Your text has been converted.", "Success!");
  }
  
}
function ctc() {
  var copyText = document.getElementById("text").value;
  if (copyText=="") {
    toastr["error"]("No text to copy.", "Error!");
  }
  else
  {
    var copyText = document.getElementById("text");
    copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  toastr["success"]("Your text has been Copied.", "Success!");
  }
  
}
