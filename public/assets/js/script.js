// fonction jquery qui permet d'afficher un diaporama
function affiche() {
      i++;
      console.log('image numero:',i)
      if (i==1) precedent = '#img5'
           else precedent = '#img' + (i-1);
      var actuel = '#img' + i;
      $(precedent).fadeOut(2000);
      $(actuel).fadeIn(2000);
      if (i==5) i=0;          
    }