// --- Directions
// Given a string, return the character that is most
// commonly used in the string.
// --- Examples
// maxChar("abcccccccd") === "c"
// maxChar("apple 1231111") === "1"

function maxChar(str) {
const charMap = {};
let maxChar = '';
let max = 0;


for (let char of str) {
    if (charMap[char]) {
        charMap[char]++;
    } else {
        charMap[char] = 1;
    }
}

for (let char in charMap) {
    if (charMap[char] > max) {
        max = charMap[char]
        maxChar = char;
    }
}

return maxChar;
//console.log(charMap);

}

/*
    var empty = new Map();
    var i = 0;
    for (let iterateOver of str) {
        for (let countKeys of str) {
            if(empty.has(countKeys)) {
                i++;
            }
        empty.set(iterateOver, i)
        i = 0;
        }

    }

    var findMax = empty.values();


    for (var x = 0; x < empty.length; x++) {

        if (empty[x] > empty[x + 1]) {

        } 
        
    }
*/


module.exports = maxChar;
