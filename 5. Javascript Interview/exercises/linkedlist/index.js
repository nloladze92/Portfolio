// --- Directions
// Implement classes Node and Linked Lists
// See 'directions' document

class Node {
    constructor(data, next = null) {
        this.data = data;
        this.next = next;
    }

}

class LinkedList {
    constructor() {
        this.head = null;
    }

    insertFirst(data) {
        //const node = new Node(data, this.head);
        this.head = new Node(data, this.head);
    }

    size() {
        var counter = 0;
        let node = this.head;

        while (node) {
            counter++;
            node = node.next;
        }
        /*
        if(!(head.next == null)) {
            counter++;
        }
        */
        return counter;
    }

    getFirst() {
        //let node = this.head
        return this.head;
    }

    getLast() {
        if (!this.head) {
            return null;
        }

        let node = this.head;

        while(node) {
            if (node.next === null) {
                return node;
            }

            node = node.next;
        }
      
}

    clear() {

        this.head = null;

        /*
        let node = this.head;
        while(node) {
            node.pop();
        }
        */

    }

    removeFirst() {
        if (!this.head) {
            return;
        }
       this.head = this.head.next;
    }

    removeLast() {
        if(this.head) {
            return
        }

        if (!this.head.next) {
            this.head = null;
            return;
        }

        let previous = this.head;
        let node = this.head.next;

        while(node.next) {
            previous = node;
            node = node.next;

            /*
            if(!node.next) {
                node = null;
            }
            */
        }

        previous.next = null;
    }

    insertLast(data) {
        const last = this.getLast();

        if (last) {
            //there are existing nodes in the chain
            last.next = new Node(data);
        } else {
            //the chain is empty
            this.head = new Node(data);
        }
      // LinkedList.getLast().this.head = data;
    }

    getAt(integer) {
        if (!this.head) {
            return;
        }
        
        let node = this.head;
        var counter = 0;
        while(node) {
            if(integer === counter) {
                return node;
            }
            counter++;
            node = node.next;
        }
        return null;
    }

    removeAt(index) {
        if (!this.head) {
            return;
        }

        if (index === 0) {
            this.head = this.head.next;
            return;
        }

        const previous = this.getAt(index - 1);
        if (!previous || !previous.next) {
            return;
        }
        previous.next = previous.next.next;
    }

    insertAt(data, index) {
        if(!this.head) {
        this.head = new Node(data);
        return;
        }

        if (index === 0) {
            this.head = new Node(data, this.head);
            return;
        }

        /*
        if (this.getLast.next == null) {
            this.insertLast();
            return;
        }
        */

        const previous = this.getAt(index - 1) || this.getLast();
        const node = new Node(data, previous.next);
        previous.next = node;
        //previous.next = index;
    }

    *[Symbol.iterator]() {
        let node = this.head;
        while (node) {
            yield node; 
            node = node.next;
        }
    }

    /*
    forEach(apply) {
        this.head = node;
        while(node) {
            apply(node);
        }
        */
    }




}

module.exports = { Node, LinkedList };
