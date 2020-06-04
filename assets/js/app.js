// Show more button logic
if(document.getElementById('showLess')){
  var ogstr = document.getElementById('showLess').innerText;
  var moreBtn = document.getElementById('moreBtn');
  moreBtn.style.display="none";
  var newstr = ogstr;
  var n = ogstr.length;

  if(n>473){
    newstr=ogstr.substr(0,470)+'...';
    document.getElementById('showLess').innerText=newstr;
    moreBtn.style.display="initial";
 }
}
function showFull(){
   if(document.getElementById('showLess').innerText.length>473){
    document.getElementById('showLess').innerText=newstr;
    moreBtn.innerText="Show more +";
  }else{
      document.getElementById('showLess').innerText=ogstr;
      moreBtn.innerText="Show less -"
  }
}



//Careers Modal
  const modal = document.querySelector('#my-modal');
  const closeBtn = document.querySelector('.close');
  
  // Events
  if(closeBtn){
    closeBtn.addEventListener('click', closeModal);
  }
  window.addEventListener('click', outsideClick);

  // Open
  function openModal() {
    modal.style.display = 'block';
  }
  // Close
  function closeModal() {
    modal.style.display = 'none';
  }
  // Close If Outside Click
  function outsideClick(e) {
    if (e.target == modal) {
      modal.style.display = 'none';
    }
  }
