

const { registerBlockType } = wp.blocks;

registerBlockType('dot1001/custom-block', {

title: 'Custom block',

description: 'Custom block',

icon: 'format-image',

category: 'layout',

attributes: {
author: {

    type: 'strings'
}

},


edit({attributes}){

return <input value={attributes.author} type="text"/>;

},

save() {

    return <div>Hello World..1,2,3.</div>;

},


})