let words = {
    one: "Dacia",
    two: "Clio",
    three: "Kangoo",
    foor : 'Renaut'
};
let wordArray = Object.values(words);
let change = document.getElementById('change-word');
let i = 0;
setInterval(() => {
    change.textContent = wordArray[i];
    i = (i + 1) % wordArray.length;
}, 2000);
