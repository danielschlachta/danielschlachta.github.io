<h1>idg_document\set_properties: unknown property 'show-name'</h1>
<pre>
#0 /home/daniel/Development/Projects/indigo/indigo/library/object.php(212): idg_diag()
#1 /home/daniel/Development/Projects/indigo/indigo/library/tree.php(573): idg_object->set_properties()
#2 [internal function]: idg_treenode->_xml_read_start()
#3 /home/daniel/Development/Projects/indigo/indigo/library/tree.php(500): xml_parse()
#4 /home/daniel/Development/Projects/indigo/docs/demo/hello/index.php(8): idg_treenode->read_xml()

object->idg_object->idg_leafnode->idg_treenode->idg_site_element(id='home', name='Home') idg_document Object
(
    [idg_id:idg_object:private] => idg_document-1
    [properties:idg_object:private] => Array
        (
            [id] => home
            [name] => Home
        )

    [hooks:idg_object:private] => Array
        (
        )

    [type_object:idg_object:private] => idg_document_type Object
        (
            [properties:idg_type:private] => Array
                (
                    [name] => 1
                    [tag] => 
                    [id] => 1
                    [description] => 
                    [navigation-comment] => 
                    [index-document] => 
                    [title] => 
                    [uuid] => 
                )

            [hooks:idg_type:private] => Array
                (
                    [title] => $this->get_default_title
                    [last-change] => $this->get_last_change
                )

            [child_types:protected] => Array
                (
                    [0] => idg_datasource
                    [1] => idg_renderer
                    [2] => idg_attribute
                )

        )

    [element_name:idg_leafnode:private] => document
    [attributes:idg_leafnode:private] => Array
        (
        )

    [text:idg_leafnode:private] => 
    [current_parameter:idg_treenode:private] => 
    [current_option:idg_treenode:private] => 
    [last_change:idg_document:private] => 
)
</pre>