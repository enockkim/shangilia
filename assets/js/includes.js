fetch("./includes/navigation_bar.html")
  .then(response => {
    return response.text()
  })
  .then(data => {
    document.querySelector("navbar").innerHTML = data;
  });

  fetch("./includes/head.html")
  .then(response => {
    return response.text()
  })
  .then(data => {
    document.querySelector("head").innerHTML = data;
  });
  
