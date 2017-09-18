var affiliateBeautifier = (function () {
	var fn = {};

	fn.init = function() {
        console.log('helo');
        
        var items = document.querySelectorAll('.item');
        var meta = document.querySelector('.meta');

        
        for (var i = 0; i < items.length; i++) {
            preview = items[i].querySelector('.preview');
            preview.addEventListener('click', function(e) {
                var item = this.parentNode;
                var selected = false;

                if(item.classList.contains('selected')) {
                    selected = true;
                }

                fn.clear(items, meta_wrap);

                if(!selected) {
                    var meta_wrap = item.querySelector('.meta-wrap');
                    item.classList.add('selected');
                    meta_wrap.innerHTML = meta.innerHTML;
                    meta_wrap.querySelector('.edit a').setAttribute('href', item.getAttribute('data-url'));
                    meta_wrap.querySelector('.panel a').setAttribute('href', item.getAttribute('data-panel'));
                }
            });
        }
    };
    
    fn.clear = function(items, meta_wrap) {
        for (var i = 0; i < items.length; i++) {
            var meta_wrap = items[i].querySelector('.meta-wrap');
            items[i].classList.remove('selected');
            meta_wrap.innerHTML = '';
        }
    };

	return fn;
})();