$(document).ready(function() {

  var $demo = $('.demo');
  var $items = $('.demo__items');
  var $line = $('.demo__line');
  var $printer = $('.printer');
  var $printerItemCont = $('.printer__item-cont');

  var maxDragY = 150;
  var minDragY = 60;
  var printerInitY = -90;
  var dragResistance = 0.6;
  var deltaY = 0;
  var printing = false;

  var printStep1AT = 0.3;
  var printStep2Delay = printStep1AT + 0.1;
  var printStep2AT = 1.8;
  var printStep3Delay = printStep2Delay + printStep2AT;
  var printStep3AT = 0.55;
  var printFullAT = printStep3Delay + printStep3AT;

  var itemsInfo = [
    {
          heading: 'Payment receipt',
      amount: '$34',
      info: 'Grocery Store: Whole Foods, Time: 3pm - 4pm ET, Products: Kale, Honey, Chocolate, Wine, Wallet ID: 0280982390811133, Volk Score: 340',
      details: '67 Ohni',
      when: '23% Synced'
    },
    {
        heading: 'Payment receipt',
        amount: '$440',
        info: 'Store: Wal-Mart, , Time: 2pm - 1pm PT, Products: Leather Couch, TV 42 Panasonic, Wallet ID: 234132392311133, Volk Score: 260',
        details: '520 Ohni',
        when: '98% Synced'
    },
    {
        heading: 'Anonymous receipt',
        amount: '$54',
        info: 'Store: Anonymous, Time: 11am - 4pm CST, Products: Anonymous Wallet ID: 266623477788833, Volk Score: 104, Vote: 3 / 5',
        details: '15 Ohni',
        when: '1% Synced'
    }
  ];
  
  var itemCounter = 0;
  var $itemBoilerplate = $('.item--boilerplate');

  function generateNewItem() {
    var $item = $itemBoilerplate.clone();
    var $itemFront = $('.item__front', $item);
    var data = itemsInfo[itemCounter];
    itemCounter++;
    if (itemCounter > 2) itemCounter = 0;
    
    $item.removeClass('item--boilerplate');
    
    Object.keys(data).forEach(function(prop) {
      var $el = $('.item__' + prop, $itemFront);
      var val = data[prop];
      
      if (prop === 'imgBackColor') return;
      if (prop === 'img') {
        $el.attr('src', val);
      } else if (prop === 'amountLink') {
        $el.attr('href', val);
      } else {
        $el.text(val);
      }
    });
    
    $('.item__back .item__img', $item).css('background', data.imgBackColor);
    
    return $item;
  };

  function insertNewItem() {
    var $newItem = generateNewItem();

    $printerItemCont.empty();
    $printerItemCont.append($newItem);
  };
  
  insertNewItem();

  function cloneAndPlacePrintedItem() {
    var $printedItem = $('.item--in-printer');
    var $clone = $printedItem.clone();
    var itemOffsets = $printedItem.offset();
    var demoOffsets = $demo.offset();
    var left = itemOffsets.left - demoOffsets.left;
    var top = itemOffsets.top - demoOffsets.top;

    $clone.removeClass('item--in-printer').addClass('s--cloned');
    $clone.css({left: left, top: top});

    $demo.append($clone);

    setTimeout(function() {
      var $finalClone = $clone.clone();
      $finalClone.attr('style', '');
      $finalClone.removeClass('s--cloned');

      $items.prepend($finalClone);
      insertNewItem();
      
      setTimeout(function() {
        $clone.remove();
      }, 50);
    }, printStep3AT * 1000);
  };

  function runPrintAnimation() {
    $demo.addClass('s--printing');

    setTimeout(function() {
      cloneAndPlacePrintedItem();
      $demo.css('top');
      $demo.addClass('s--printing-step-3');
    }, printStep3Delay * 1000);
  };

  $(document).on('mousedown touchstart', '.demo__items', function(e) {
    if (printing) return;
    console.log('click touch');
    var startY = e.pageY || e.originalEvent.touches[0].pageY;

    $items.addClass('s--no-select');

    $(document).on('mousemove touchmove', function(e) {
      e.preventDefault();
      var y = e.pageY || e.originalEvent.touches[0].pageY;
      deltaY = (y - startY) * dragResistance;

      if (deltaY < 0) deltaY = 0;
      if (deltaY > maxDragY) deltaY = maxDragY;

      var progress = deltaY / maxDragY;
      var printerY = printerInitY * progress * -1;

      $items.css('transform', 'translate3d(0,'+ deltaY +'px,0)');
      $line.css('transform', 'scaleX('+ Math.sqrt(progress) +')');
      $printer.css('transform', 'translate3d(0,'+ printerY +'px,0)');
    });

    $(document).on('mouseup touchend', function() {
      $(document).off('mousemove touchmove mouseup touchend');
      $items.removeClass('s--no-select');
      if (!deltaY) return;

      printing = true;
      var _printAT = printFullAT;

      if (deltaY >= minDragY) {
        runPrintAnimation();
      } else {
        $demo.addClass('s--reset');
        _printAT = printStep1AT;
      }

      setTimeout(function() {
        $demo.removeClass('s--printing s--printing-step-3 s--reset');
        $items.attr('style', '');
        $line.attr('style', '');
        $printer.attr('style', '');

        printing = false;
        deltaY = 0;
      }, _printAT * 1000);
    });
  });

});