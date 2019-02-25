// --- Directions
// Given a string, return true if the string is a palindrome
// or false if it is not.  Palindromes are strings that
// form the same word if it is reversed. *Do* include spaces
// and punctuation in determining if the string is a palindrome.
// --- Examples:
//   palindrome("abba") === true
//   palindrome("abcdefg") === false

function palindrome(str) {

    return str.split('').every((char, i) => {
        return char === str[str.length - i - 1];
    });
    
     
    /*
    const reversal = str.split('').reduce(
        (reversal, currentvalue) => currentvalue + reversal, '')
        
        return reversal === str;
*/
    /*
    let rev_val = '';
    for (let char of str) {
        rev_val = char + rev_val;
       // debugger;
    }
    
    if (reversal == str) {
        return true;
    } else {
        return false;
    }
    */

    
}

// palindrome("yo oy");


module.exports = palindrome;
