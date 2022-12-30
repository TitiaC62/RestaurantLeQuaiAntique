// DATE

const today = document.getElementById('today')
const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric',  hour: '2-digit', minute: '2-digit'  }
const dateLong = new Date().toLocaleString('fr-FR', options);
const heure = new Date().toLocaleTimeString()

console.log(heure)

today.innerHTML = `Nous sommes le ${dateLong}`

// RESTAURANT OUVERT OU FERME

  const ouverture = document.getElementById('ouverture');

  let horaires = {
    0: [[11, 15], [18.5, 21.5]],  // Le restaurant ouvre de 11h à 15h et de 18h30 à 21h30 le dimanche
    1: [[11, 15], [18.5, 21.5]],  // Le restaurant ouvre de 11h à 15h et de 18h30 à 21h30 le lundi
    2: [[11, 15], [18.5, 22]],  // Le restaurant ouvre de 11h à 15h et de 18h30 à 22h le mardi
    3: [[11.5, 22]],  // Le restaurant ouvre de 11h30 à 22h le mercredi
    4: [[11, 15], [18.5, 21.5]],  // Le restaurant ouvre de 11h à 15h et de 18h30 à 21h30 le jeudi
    5: [[11, 15], [18.5, 22]],  // Le restaurant ouvre de 11h à 15h et de 18h30 à 22h le vendredi
    6: [[11, 15], [18.5, 0]]   // Le restaurant ouvre de 11h à 15h et de 18h30 à minuit le samedi
  };
  
   function estOuvert(heure, horaires) {
     for (let i = 0; i < horaires.length; i++) {
       let heureOuverture = horaires[i][0];
       let heureFermeture = horaires[i][1];
       if (heureOuverture <= heure && heure < heureFermeture) {
         ouverture.innerHTML = "<span style='color: green'>OUVERT</span>";
       }
     }
     ouverture.innerHTML = "<span style='color: red'>FERME</span>" ;  
    }

   let heureCourante = new Date().getHours();  
   let jourCourant = new Date().getDay(); 
   let horairesJourCourant = horaires[jourCourant];  

   estOuvert(heureCourante, horairesJourCourant);

  console.log(horairesJourCourant)
