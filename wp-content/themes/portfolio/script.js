$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true, 
				continuous: true
			});
                        
		});

function displayJsElements(parent){
	parent = (parent ? parent : document.body);
	var nodes = parent.childNodes;
	for(var i=0; i<nodes.length; i++){
		if(nodes[i].tagName){					
			//On supprime l'éventuelle présence de la class "jsactif" sur l'élément
			if(nodes[i].className){
				var class_list = nodes[i].className.split(' ');
				nodes[i].className = '';
				for(var j=0; j<class_list.length; j++){
					if(class_list[j] != 'jsactif'){
						nodes[i].className += class_list[j];
					}
				}
			}
			displayJsElements(nodes[i]);
		}
	}


}