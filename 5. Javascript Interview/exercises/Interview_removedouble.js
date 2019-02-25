
function check(str) {

    const check = str.split('');
    const to_be_returned = [];
    check.map(x => {
        if(!to_be_returned.includes(x)) {
            to_be_returned.push(x);
        }
    });

    return to_be_returned.join('');
}

console.log(check("check this, doubles, triples, check, check, test"));