// --- Directions
// Write a function that accepts a positive number N.
// The function should console log a pyramid shape
// with N levels using the # character.  Make sure the
// pyramid has spaces on both the left *and* right hand sides
// --- Examples
//   pyramid(1)
//       '#'
//   pyramid(2)
//       ' # '
//       '###'
//   pyramid(3)
//       '  #  '
//       ' ### '
//       '#####'
//   pyramid(4)
//      '   #   '
//      '  ###  '
//      ' ##### '
//      '#######'

function pyramid(n, row = 0, level = '') {

    if (row === n) {
        return;
    }

    if (level.length === 2 * n - 1) {
        console.log(level);
        return pyramid(n, row + 1);
    }

    const midpoint = Math.floor((2 * n - 1) / 2);
    let add; 
    if (midpoint - row <= level.length && midpoint + row >= level.length) {
        add = '#';
    }
    else {
        add = ' ';
    }

    pyramid(n, row, level + add);
    

    /* iterative solution
    for (let row = 0; row < n; row++) {
        let level = '';
        const midpoint = Math.floor((2*n - 1) / 2);

        for (let column = 0; column < 2 * n - 1; column++) {
            if (midpoint - row <= column && midpoint + row >= column) {
                level += '#';
            } else {
                level += ' ';
            }
        }
    }
    */
     //my solution
     /*
        const steps = new Object();
        var ending = (n - 1) + n;

        for (var x = 0; x < n; x++) {
            steps[x - n]
        }

        if (steps.value.length == n) {
            return;
        }
        */



        
}

module.exports = pyramid;

/*for (let room in ending)
                if (room + floor + 1 <= n) {
                    room += "#";
                } else if (floor < n && floor * 2 + 1 != ending) {
                    room + n > n && n + floor
                }
                else {
                room += " ";
                } */