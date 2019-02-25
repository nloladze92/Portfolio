// --- Directions
// Given a string, return a new string with the reversed
// order of characters
// --- Examples
//   reverse('apple') === 'leppa'
//   reverse('hello') === 'olleh'
//   reverse('Greetings!') === '!sgniteerG'

function reverse(str) {

  return str.split('').reduce((rev, char) => char + rev, '');


// solution 1
/*
  const arr = str.split('');
  arr.reverse();
  return arr.join('');
*/
//  return str.split('').reverse().join('');

//solution 2
/*
  let reversed = '';

  for (let character of str) {
    reversed = character + reversed;
  }
  */
  //my build, failed
/*
  empty = [];

  for (i = 0; i < str.length; i++) {
    empty.push(str[i]);
  }
  return empty.join('');
  */


}

module.exports = reverse;
