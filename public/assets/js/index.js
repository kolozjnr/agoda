var navItems = document.querySelectorAll(".mobile-bottom-nav__item");
navItems.forEach(function(e, i) {
	e.addEventListener("click", function(e) {
		navItems.forEach(function(e2, i2) {
			e2.classList.remove("mobile-bottom-nav__item--active");
		})
		this.classList.add("mobile-bottom-nav__item--active");
	});
});

//Submit orders

	//alert()
	// $("#create-order").on("submit", function(e){
	// 	 e.preventDefault();
    // var formData = new FormData(this);
	// 	//alert(formData)

	// 	$.ajax({
	// 		type:"POST",
	// 		url:"{{route('order.store')}}",
	// 		data:formData,
	// 		processData: false,
	// 		contentType: false,

	// 		beforeSend:function(){

	// 		},
	// 		success:function(){
	// 			console.log("success")
	// 		}
	// 	})

		
	// });
	

	$("#create-order").on('submit',function(e) {

		e.preventDefault();
		var form_data= new FormData(this);
		
		sendOrder(form_data);
		
		console.log(form_data);
});

	function sendOrder(form_data){
		$.ajax({ 
			
				type: 'POST',          
				url: "/order",     
				data: form_data,
				processData: false,
				contentType: false,
				cache:false,
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				  },
				cache: false,
				dataType: 'json',
				beforeSend: function() {
				
				//$('#submit_ticket').html("Loading..");
				//$('#loading_button').fadeIn();
				
				}, 
				success: function(resp) { 
					//resp = JSON.parse(resp);
					
					console.log(resp);  
				
				},
				error: function(error){
					console.error(error);
				}
			});     
		}

		//Update update
		$("#updint").on("submit", function(){
			var form_data= new FormData(this);

			$.ajax({
				type:"POST",
				url:'/updateinsert',
				data:form_data,
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				  },

				beforeSend: function(){

				},
				success: function(resp){
					console.log(resp)
					//$("#succ").click()
				}
			})
		})


		 //Deposit
 $("#popForm").on('submit',function(e) {

	e.preventDefault();
	var form_data= new FormData(this);
	
	sendDeposit(form_data);
	
	console.log(form_data);
	});
	
	function sendDeposit(form_data){
	$.ajax({ 
		type: 'POST',          
		url: "deposit",     
		data: form_data,
		processData: false,
		contentType: false,
		cache:false,
		headers: {
		  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  },
		cache: false,
		dataType: 'json',
		beforeSend: function() {
		
		//$('#submit_ticket').html("Loading..");
		//$('#loading_button').fadeIn();
		
		}, 
		success: function(resp) { 
		  //resp = JSON.parse(resp);
		  
		  console.log(resp);  
		
		},
		error: function(error){
		  console.error(error);
		}
	  });     
	}

	function getrr(){
		document.getElementById("snackk").click();
	}
	function details(){
		document.getElementById("snackk").click();
	}


	function myFunction() {
		// Get the snackbar DIV
		var x = document.getElementById("snackbar");
	  
		// Add the "show" class to DIV
		x.className = "show";
	  
		// After 3 seconds, remove the show class from DIV
		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
	  }

	  
		
		// Snackbarfirm
		// function _defineProdoperty(obj, key, value) {if (key in obj) {Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true });} else {obj[key] = value;}return obj;}function _classPrivateFieldGet(receiver, privateMap) {var descriptor = privateMap.get(receiver);if (!descriptor) {throw new TypeError("attempted to get private field on non-instance");}if (descriptor.get) {return descriptor.get.call(receiver);}return descriptor.value;}function _classPrivateFieldSet(receiver, privateMap, value) {var descriptor = privateMap.get(receiver);if (!descriptor) {throw new TypeError("attempted to set private field on non-instance");}if (descriptor.set) {descriptor.set.call(receiver, value);} else {if (!descriptor.writable) {throw new TypeError("attempted to set read only private field");}descriptor.value = value;}return value;}function _classPrivateMethodGet(receiver, privateSet, fn) {if (!privateSet.has(receiver)) {throw new TypeError("attempted to get private field on non-instance");}return fn;}function getElements(toast, elementRef) {
		// 	return toast.querySelectorAll(`[data-ref=${elementRef}]`);
		//   }
		  
		function copy() {
			// Get the text field
			var copyText = document.getElementById("myInput");
		  
			// Select the text field
			copyText.select();
			copyText.setSelectionRange(0, 99999); // For mobile devices
		  
			// Copy the text inside the text field
			navigator.clipboard.writeText(copyText.value);
			
			// Alert the copied text
			// alert("Copied the text: " + copyText.value);
		  }


  
		//   function getElement(toast, elementRef) {
		// 	return getElements(toast, elementRef)[0];
		//   }var _toastContainer = new WeakMap();var _init = new WeakSet();var _createToastElement = new WeakSet();var _cleanToast = new WeakSet();var _setupEvents = new WeakSet();
		  
		//   class Toast {
		  
		  
		  
		  
		// 	constructor(_settings = {}) {_setupEvents.add(this);_cleanToast.add(this);_createToastElement.add(this);_init.add(this);_defineProperty(this, "toasts", []);_defineProperty(this, "dialogSupported", typeof HTMLDialogElement === 'function');_toastContainer.set(this, { writable: true, value: null });
		// 	  _classPrivateMethodGet(this, _init, _init2).call(this, _settings);
		// 	}
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
			// show(settings = {}) {
			//   const defaults = {
			// 	autoHide: true,
			// 	dismissible: false,
			// 	...this.SETTINGS,
			// 	...settings };
		  
		  
			//   const toast = _classPrivateMethodGet(this, _createToastElement, _createToastElement2).call(this, defaults);
		  
			//   const toastMessage = getElement(toast, 'message');
			//   if (settings.message) {
			// 	toastMessage.innerHTML = settings.message;
			//   } else if (settings.actions === false || settings.actions === null || settings.actions === '') {
			// 	toastMessage.remove();
			//   }
		  
			//   _classPrivateMethodGet(this, _setupEvents, _setupEvents2).call(this, toast, defaults);
		  
			//   toast.show();
		  
			//   return toast;
			// }
		  
			// success(message, config = {}) {
			//   return this.show({
			// 	type: 'success',
			// 	classList: ['text-white', 'bg-success'],
			// 	message,
			// 	...config });
		  
			// }
		  
			// error(message, config = {}) {
			//   return this.show({
			// 	type: 'error',
			// 	classList: ['text-white', 'bg-danger'],
			// 	message,
			// 	...config });
		  
			// }
		  
			// warning(message, config = {}) {
			//   return this.show({
			// 	type: 'warning',
			// 	classList: ['bg-warning'],
			// 	message,
			// 	...config });
		  
			// }
		  
			// info(message, config = {}) {
			//   return this.show({
			// 	type: 'info',
			// 	classList: ['bg-info'],
			// 	message,
			// 	...config });
		  
			// }
		  
			// log(message, config = {}) {
			//   return this.show({
			// 	type: 'log',
			// 	message,
			// 	...config });
		  
			// }
		  
			// closeAll() {
			//   this.toasts.forEach(toast => {
			// 	toast.close('close');
			//   });
			// }
		  
			// close(id) {var _this$toasts$find;
			//   (_this$toasts$find = this.toasts.find(toast => toast.id === id)) === null || _this$toasts$find === void 0 ? void 0 : _this$toasts$find.close('close');
			// }}var _init2 = function _init2(settings) {this.SETTINGS = { id: 'toast', duration: 2000, reverseOrder: false, ...settings };const toastContainerElm = document.createElement('div');toastContainerElm.classList.add(this.SETTINGS.id + '-container');_classPrivateFieldSet(this, _toastContainer, document.body.appendChild(toastContainerElm));};var _createToastElement2 = function _createToastElement2(defaults) {var _defaults$type, _defaults$className;const toast = document.createElement('dialog');toast.classList.add(...[defaults.id, `${defaults.id}-${(_defaults$type = defaults.type) !== null && _defaults$type !== void 0 ? _defaults$type : 'default'}`, (_defaults$className = defaults.className) !== null && _defaults$className !== void 0 ? _defaults$className : null, ...(defaults.classList ? defaults.classList : [null]), 'align-items-center', 'border-0', 'p-0'].filter(token => token !== null));if (this.toasts.find(toast => toast.id === defaults.id)) {defaults.id = `${defaults.id}-${this.toasts.length}`;}toast.setAttribute('id', defaults.id);toast.setAttribute('role', 'alert');toast.dataset.component = 'toast';toast.innerHTML = `
			// 		  <form method="dialog" data-ref="form">
			// 			  <div class="toast-body" data-ref="message"></div>
			// 			  ${defaults.autoHide ? '' : '<button type="submit" class="btn-close" aria-label="Close"></button>'}
			// 		  </form>
			// 	  `;this.toasts.push(toast);_classPrivateFieldGet(this, _toastContainer)[defaults.reverseOrder ? 'prepend' : 'appendChild'](toast);return toast;};var _cleanToast2 = function _cleanToast2(toast) {this.toasts = this.toasts.filter(item => item !== toast);toast.remove();};var _setupEvents2 = function _setupEvents2(toast, settings) {toast.addEventListener('close', event => {toast.dispatchEvent(new Event('cancel'));_classPrivateMethodGet(this, _cleanToast, _cleanToast2).call(this, event.target);}, { once: true });if (settings.autoHide) {toast.addEventListener('animationend', () => {toast.style.animationDelay = `${settings.duration}ms`;toast.classList.add('is-closing');toast.addEventListener('animationend', () => {toast.classList.add('d-none');toast.close();}, { once: true });}, { once: true });}};const toast = new Toast({ reverseOrder: true });
