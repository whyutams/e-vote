
import { Editor } from 'https://esm.sh/@tiptap/core@2.6.6';
import StarterKit from 'https://esm.sh/@tiptap/starter-kit@2.6.6';

window.addEventListener('load', function() {
    const editors = 2;

    for (let i = 0; i < editors; i++) {        
        if (document.getElementById(`wysiwyg-typography-example${i+1}`)) {

            // tip tap editor setup
            const editor = new Editor({
                element: document.querySelector(`#wysiwyg-typography-example${i+1}`),
                extensions: [
                    StarterKit
                ],
                content: '<p></p> <br>',
                onUpdate({ editor }) {
                    document.querySelector(`#input-hidden`).value = editor.getHTML(); 
                },
                editorProps: {
                    attributes: {
                        class: 'format lg:format-lg dark:format-invert focus:outline-none format-blue max-w-none',
                    },
                }
            });
        
            // set up custom event listeners for the buttons
            document.getElementById(`toggleListButton${i+1}`).addEventListener('click', () => {
               editor.chain().focus().toggleBulletList().run();
            });
            document.getElementById(`toggleOrderedListButton${i+1}`).addEventListener('click', () => {
                editor.chain().focus().toggleOrderedList().run();
            });
            // document.getElementById('toggleBlockquoteButton').addEventListener('click', () => {
            //     editor.chain().focus().toggleBlockquote().run();
            // });
            // document.getElementById('toggleHRButton').addEventListener('click', () => {
            //     editor.chain().focus().setHorizontalRule().run();
            // });
            // document.getElementById('toggleCodeBlockButton').addEventListener('click', () => {
            //     editor.chain().focus().toggleCodeBlock().run();
            // });
    }

    // typography dropdown
    // const typographyDropdown = FlowbiteInstances.getInstance('Dropdown', 'typographyDropdown');

    // document.getElementById('toggleParagraphButton').addEventListener('click', () => {
    //     editor.chain().focus().setParagraph().run();
    //     typographyDropdown.hide();
    // });
    
    // document.querySelectorAll('[data-heading-level]').forEach((button) => {
    //     button.addEventListener('click', () => {
    //         const level = button.getAttribute('data-heading-level');
    //         editor.chain().focus().toggleHeading({ level: parseInt(level) }).run()
    //         typographyDropdown.hide();
    //     });
    // });
}
})
