Slider = (function() {

	function Slider(params) {
		this.btn = params.btn;
		this.view = params.view;
		this.swipe;
		this.left_btn = this.view.find('.left');
		this.right_btn = this.view.find('.right');;
		this.close_btn = this.view.find('.close');;
	}

	Slider.prototype = {
		init: function() {
			var self = this;

			this.btn.on('click', function(e) {
				self.open_popup();
				return e.preventDefault();
			});

			this.left_btn.on('click', function(e) {
				self.swipe.prev();
				return e.preventDefault();
			});

			this.right_btn.on('click', function(e) {
				self.swipe.next();
				return e.preventDefault();
			});

			this.close_btn.on('click', function(e) {
				self.view.hide();
				$('.popup_bg').hide();
				return e.preventDefault();
			});
		},

		open_popup: function() {
			var self = this;

			$('.popup_bg').show();
			self.view.show();
			self.swipe = Swipe(self.view.find('.swipe')[0]);

		}
	};

	return Slider;

})();