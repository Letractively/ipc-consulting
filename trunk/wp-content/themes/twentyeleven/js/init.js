// Easing equation, borrowed from jQuery easing plugin
// http://gsgd.co.uk/sandbox/jquery/easing/
jQuery.easing.easeOutQuart = function (x, t, b, c, d) {
    return -c * ((t=t/d-1)*t*t*t - 1) + b;
};

jQuery(function( $ ){
    /**
     * Most jQuery.serialScroll's settings, actually belong to jQuery.ScrollTo, check it's demo for an example of each option.
     * @see http://flesler.demos.com/jquery/scrollTo/
     * You can use EVERY single setting of jQuery.ScrollTo, in the settings hash you send to jQuery.serialScroll.
     */
    
    /**
     * The plugin binds 6 events to the container to allow external manipulation.
     * prev, next, goto, start, stop and notify
     * You use them like this: $(your_container).trigger('next'), $(your_container).trigger('goto', [5]) (0-based index).
     * If for some odd reason, the element already has any of these events bound, trigger it with the namespace.
     */     
    
    /**
     * IMPORTANT: this call to the plugin specifies ALL the settings (plus some of jQuery.ScrollTo)
     * This is done so you can see them. You DON'T need to specify the commented ones.
     * A 'target' is specified, that means that #screen is the context for target, prev, next and navigation.
     */
    $('.aevo_slider_hp').serialScroll({
        target:'#aevo_slider2_scrolling_hp',
        items:'li', // Selector to the items ( relative to the matched elements, '#sections' in this case )
        axis:'x',// The default is 'y' scroll on both ways
        navigation:'#navi li a',
        duration:700,// Length of the animation (if you scroll 2 axes and use queue, then each axis take half this time)
        force:true, // Force a scroll to the element specified by 'start' (some browsers don't reset on refreshes)
        interval:6000,
		step:1,
        //queue:false,// We scroll on both axes, scroll both at the same time.
        //event:'click',// On which event to react (click is the default, you probably won't need to specify it)
        //stop:false,// Each click will stop any previous animations of the target. (false by default)
        //lock:true, // Ignore events if already animating (true by default)        
        //start: 0, // On which element (index) to begin ( 0 is the default, redundant in this case )       
        //cycle:true,// Cycle endlessly ( constant velocity, true is the default )
        //step:1, // How many items to scroll each time ( 1 is the default, no need to specify )
        //jump:false, // If true, items become clickable (or w/e 'event' is, and when activated, the pane scrolls to them)
        //lazy:false,// (default) if true, the plugin looks for the items on each event(allows AJAX or JS content, or reordering)
        //interval:1000, // It's the number of milliseconds to automatically go to the next
        //constant:true, // constant speed
        
        onBefore:function( e, elem, $pane, $items, pos ){
            /**
             * 'this' is the triggered element 
             * e is the event object
             * elem is the element we'll be scrolling to
             * $pane is the element being scrolled
             * $items is the items collection at this moment
             * pos is the position of elem in the collection
             * if it returns false, the event will be ignored
             */
             //those arguments with a $ are jqueryfied, elem isn't.
            e.preventDefault();
            if( this.blur )
                this.blur();
			$('#navi li a').removeClass('active');
			switch (pos) { 
				case 0:
					$('#aevo_slider_hp_button1').addClass('active');
					break; 
				case 1:
					$('#aevo_slider_hp_button2').addClass('active');
					break; 	
				case 2:
					$('#aevo_slider_hp_button3').addClass('active');
					break; 
				case 3:
					$('#aevo_slider_hp_button4').addClass('active');
					break; 
					}	
			   },
        onAfter:function( elem ){
            //'this' is the element being scrolled ($pane) not jqueryfied
			    }
		
    } );
			
	
	    $('.aevo_news_hp').serialScroll({
        target:'#aevo_news_slider2_scrolling_hp',
        items:'li', // Selector to the items ( relative to the matched elements, '#sections' in this case )
        axis:'x',// The default is 'y' scroll on both ways
        navigation:'#navi_2 li a',
        duration:700,// Length of the animation (if you scroll 2 axes and use queue, then each axis take half this time)
        force:true, // Force a scroll to the element specified by 'start' (some browsers don't reset on refreshes)
        interval:6000,
		step:1,
        //queue:false,// We scroll on both axes, scroll both at the same time.
        //event:'click',// On which event to react (click is the default, you probably won't need to specify it)
        //stop:false,// Each click will stop any previous animations of the target. (false by default)
        //lock:true, // Ignore events if already animating (true by default)        
        //start: 0, // On which element (index) to begin ( 0 is the default, redundant in this case )       
        //cycle:true,// Cycle endlessly ( constant velocity, true is the default )
        //step:1, // How many items to scroll each time ( 1 is the default, no need to specify )
        //jump:false, // If true, items become clickable (or w/e 'event' is, and when activated, the pane scrolls to them)
        //lazy:false,// (default) if true, the plugin looks for the items on each event(allows AJAX or JS content, or reordering)
        //interval:1000, // It's the number of milliseconds to automatically go to the next
        //constant:true, // constant speed
        
        onBefore:function( e, elem, $pane, $items, pos ){
            /**
             * 'this' is the triggered element 
             * e is the event object
             * elem is the element we'll be scrolling to
             * $pane is the element being scrolled
             * $items is the items collection at this moment
             * pos is the position of elem in the collection
             * if it returns false, the event will be ignored
             */
             //those arguments with a $ are jqueryfied, elem isn't.
            e.preventDefault();
            if( this.blur )
                this.blur();
			$('#navi_2 li a').removeClass('active');
			switch (pos) { 
				case 0:
					$('#aevo_news_hp_button1').addClass('active');
					break; 
				case 1:
					$('#aevo_news_hp_button2').addClass('active');
					break; 	
				case 2:
					$('#aevo_news_hp_button3').addClass('active');
					break; 
					}
	
				
				
        },
        onAfter:function( elem ){
            //'this' is the element being scrolled ($pane) not jqueryfied
        }
    });
	$('.aevo_news2_hp').serialScroll({
        target:'#aevo_news_slider2_scrolling_hp',
        items:'li', // Selector to the items ( relative to the matched elements, '#sections' in this case )
        axis:'x',// The default is 'y' scroll on both ways
        navigation:'#navi_2 li a',
        duration:700,// Length of the animation (if you scroll 2 axes and use queue, then each axis take half this time)
        force:true, // Force a scroll to the element specified by 'start' (some browsers don't reset on refreshes)
        interval:6000,
		step:1,
        //queue:false,// We scroll on both axes, scroll both at the same time.
        //event:'click',// On which event to react (click is the default, you probably won't need to specify it)
        //stop:false,// Each click will stop any previous animations of the target. (false by default)
        //lock:true, // Ignore events if already animating (true by default)        
        //start: 0, // On which element (index) to begin ( 0 is the default, redundant in this case )       
        //cycle:true,// Cycle endlessly ( constant velocity, true is the default )
        //step:1, // How many items to scroll each time ( 1 is the default, no need to specify )
        //jump:false, // If true, items become clickable (or w/e 'event' is, and when activated, the pane scrolls to them)
        //lazy:false,// (default) if true, the plugin looks for the items on each event(allows AJAX or JS content, or reordering)
        //interval:1000, // It's the number of milliseconds to automatically go to the next
        //constant:true, // constant speed
        
        onBefore:function( e, elem, $pane, $items, pos ){
            /**
             * 'this' is the triggered element 
             * e is the event object
             * elem is the element we'll be scrolling to
             * $pane is the element being scrolled
             * $items is the items collection at this moment
             * pos is the position of elem in the collection
             * if it returns false, the event will be ignored
             */
             //those arguments with a $ are jqueryfied, elem isn't.
            e.preventDefault();
            if( this.blur )
                this.blur();
			$('#navi_2 li a').removeClass('active');
			switch (pos) { 
				case 0:
					$('#aevo_news_hp_button1').addClass('active');
					break; 
				case 1:
					$('#aevo_news_hp_button2').addClass('active');
					break; 	
				case 2:
					$('#aevo_news_hp_button3').addClass('active');
					break; 
					}
	
				
				
        },
        onAfter:function( elem ){
            //'this' is the element being scrolled ($pane) not jqueryfied
        }
    });
     $('.gallery_page_fix').serialScroll({
        items:'div.ngg-gallery-thumbnail',  
        prev:'a.prev2',
        next:'a.next2',
        offset:0, //when scrolling to photo, stop 230 before reaching it (from the left)
        start:0, //as we are centering it, start at the 2nd
        duration:1200,
        force:true,// Force a scroll to the element specified by 'start' (some browsers don't reset on refreshes)
        stop:true,
        lock:false,// Ignore events if already animating (true by default)
        cycle:false, //don't pull back once you reach the end
        easing:'easeOutQuart', //use this easing equation for a funny effect
        jump: true //click on the images to scroll to them
    });
 
	    $('#ipc_servizi_scrolling_page').serialScroll({ 
        items:'li',
        prev:'#buttons1 a.prev',
        next:'#buttons1 a.next', 
        offset:0, //when scrolling to photo, stop 230 before reaching it (from the left)
        start:0, //as we are centering it, start at the 2nd
        duration:1200,
        force:true,// Force a scroll to the element specified by 'start' (some browsers don't reset on refreshes)
        stop:true,// Each click will stop any previous animations of the target. (false by default)
        lock:false,// Ignore events if already animating (true by default)
        cycle:false, //don't pull back once you reach the end
        easing:'easeOutQuart', //use this easing equation for a funny effect
        jump: false, //click on the images to scroll to them
		onBefore:function( e, elem, $pane, $items, pos ){
            e.preventDefault();
            if( this.blur )
                this.blur();
			$('#buttons1 a').removeClass('active');
			switch (pos) { 
				case $items.length-1:
					$('#servizi_freccia_sx').addClass('active');
					break; 
				case 0:
					$('#servizi_freccia_dx').addClass('active');
					break; 	
				default:
					$('#servizi_freccia_sx').addClass('active');
					$('#servizi_freccia_dx').addClass('active'); 
					break; 	
					}

        },
        onAfter:function( elem ){
            //'this' is the element being scrolled ($pane) not jqueryfied
        }

    });
    
	
});

