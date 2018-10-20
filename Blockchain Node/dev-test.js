const Block = require('./block');

/* testing the block and gensis block
const block = new Block('foo', 'bar', 'zoo', 'baz');
console.log(block.toString());
console.log(Block.genesis().toString());
*/

const fooBlock = Block.mineBlock(Block.genesis(), 'foo');
console.log(fooBlock.toString());