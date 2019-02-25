// --- Directions
// Given an integer, return an integer that is the reverse
// ordering of numbers.
// --- Examples
//   reverseInt(15) === 51
//   reverseInt(981) === 189
//   reverseInt(500) === 5
//   reverseInt(-15) === -51
//   reverseInt(-90) === -9

function reverseInt(n) {

    const reversed = n.toString().split('').reverse().join('');

    return parseInt(reversed) * Math.sign(n);

    /*
    //turn to string
    let splitVal = n.toString().split('').reverse();
    var emptyArray = [];
    var secondStage = splitVal.map(eint => {
        if (eint != '0' && eint != '-') {
            emptyArray.push(eint);
         } else if (eint == '-') {
            emptyArray.unshift('-');
            }
        }
    );
    
    var combined = emptyArray.join('')
    //parse int
    return parseInt(combined);
    */
}

module.exports = reverseInt;
