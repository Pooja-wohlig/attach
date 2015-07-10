<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
class Json extends CI_Controller 
{function getalluserpoll()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`attach_userpoll`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`attach_userpoll`.`image`";
$elements[1]->sort="1";
$elements[1]->header="Image";
$elements[1]->alias="image";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`attach_userpoll`.`title`";
$elements[2]->sort="1";
$elements[2]->header="Title";
$elements[2]->alias="title";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`attach_userpoll`.`video`";
$elements[3]->sort="1";
$elements[3]->header="Video";
$elements[3]->alias="video";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`attach_userpoll`.`user`";
$elements[4]->sort="1";
$elements[4]->header="User";
$elements[4]->alias="user";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`attach_userpoll`.`status`";
$elements[5]->sort="1";
$elements[5]->header="Status";
$elements[5]->alias="status";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`attach_userpoll`.`shouldhavecomment`";
$elements[6]->sort="1";
$elements[6]->header="Should Have Comment";
$elements[6]->alias="shouldhavecomment";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`attach_userpoll`.`timestamp`";
$elements[7]->sort="1";
$elements[7]->header="Time stamp";
$elements[7]->alias="timestamp";

$elements=array();
$elements[8]=new stdClass();
$elements[8]->field="`attach_userpoll`.`content`";
$elements[8]->sort="1";
$elements[8]->header="Content";
$elements[8]->alias="content";

$elements=array();
$elements[9]=new stdClass();
$elements[9]->field="`attach_userpoll`.`creationdate`";
$elements[9]->sort="1";
$elements[9]->header="Creation Date";
$elements[9]->alias="creationdate";

$elements=array();
$elements[10]=new stdClass();
$elements[10]->field="`attach_userpoll`.`modificationdate`";
$elements[10]->sort="1";
$elements[10]->header="Modification Date";
$elements[10]->alias="modificationdate";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `attach_userpoll`");
$this->load->view("json",$data);
}
public function getsingleuserpoll()
{
$id=$this->input->get_post("id");
$data["message"]=$this->userpoll_model->getsingleuserpoll($id);
$this->load->view("json",$data);
}
function getalluserpolloption()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`attach_userpolloption`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`attach_userpolloption`.`image`";
$elements[1]->sort="1";
$elements[1]->header="Image";
$elements[1]->alias="image";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`attach_userpolloption`.`order`";
$elements[2]->sort="1";
$elements[2]->header="Order";
$elements[2]->alias="order";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`attach_userpolloption`.`userpoll`";
$elements[3]->sort="1";
$elements[3]->header="User Poll";
$elements[3]->alias="userpoll";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`attach_userpolloption`.`timestamp`";
$elements[4]->sort="1";
$elements[4]->header="Time stamp";
$elements[4]->alias="timestamp";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`attach_userpolloption`.`text`";
$elements[5]->sort="1";
$elements[5]->header="Text";
$elements[5]->alias="text";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`attach_userpolloption`.`creationdate`";
$elements[6]->sort="1";
$elements[6]->header="Creation Date";
$elements[6]->alias="creationdate";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`attach_userpolloption`.`modificationdate`";
$elements[7]->sort="1";
$elements[7]->header="Modification Date";
$elements[7]->alias="modificationdate";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `attach_userpolloption`");
$this->load->view("json",$data);
}
public function getsingleuserpolloption()
{
$id=$this->input->get_post("id");
$data["message"]=$this->userpolloption_model->getsingleuserpolloption($id);
$this->load->view("json",$data);
}
function getalluserpollresponse()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`attach_userpollresponse`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`attach_userpollresponse`.`userpolloption`";
$elements[1]->sort="1";
$elements[1]->header="User Poll Option";
$elements[1]->alias="userpolloption";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`attach_userpollresponse`.`userpoll`";
$elements[2]->sort="1";
$elements[2]->header="User Poll";
$elements[2]->alias="userpoll";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`attach_userpollresponse`.`user`";
$elements[3]->sort="1";
$elements[3]->header="User";
$elements[3]->alias="user";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`attach_userpollresponse`.`timestamp`";
$elements[4]->sort="1";
$elements[4]->header="Time stamp";
$elements[4]->alias="timestamp";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`attach_userpollresponse`.`creationdate`";
$elements[5]->sort="1";
$elements[5]->header="Creation Date";
$elements[5]->alias="creationdate";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`attach_userpollresponse`.`modificationdate`";
$elements[6]->sort="1";
$elements[6]->header="Modification Date";
$elements[6]->alias="modificationdate";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `attach_userpollresponse`");
$this->load->view("json",$data);
}
public function getsingleuserpollresponse()
{
$id=$this->input->get_post("id");
$data["message"]=$this->userpollresponse_model->getsingleuserpollresponse($id);
$this->load->view("json",$data);
}
function getalluserpollfavourites()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`attach_userpollfavourites`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`attach_userpollfavourites`.`user`";
$elements[1]->sort="1";
$elements[1]->header="User";
$elements[1]->alias="user";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`attach_userpollfavourites`.`userpoll`";
$elements[2]->sort="1";
$elements[2]->header="User Poll";
$elements[2]->alias="userpoll";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`attach_userpollfavourites`.`timestamp`";
$elements[3]->sort="1";
$elements[3]->header="Time stamp";
$elements[3]->alias="timestamp";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`attach_userpollfavourites`.`creationdate`";
$elements[4]->sort="1";
$elements[4]->header="Creation Date";
$elements[4]->alias="creationdate";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`attach_userpollfavourites`.`modificationdate`";
$elements[5]->sort="1";
$elements[5]->header="Modification Date";
$elements[5]->alias="modificationdate";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `attach_userpollfavourites`");
$this->load->view("json",$data);
}
public function getsingleuserpollfavourites()
{
$id=$this->input->get_post("id");
$data["message"]=$this->userpollfavourites_model->getsingleuserpollfavourites($id);
$this->load->view("json",$data);
}
function getalluserpollcomment()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`attach_userpollcomment`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`attach_userpollcomment`.`user`";
$elements[1]->sort="1";
$elements[1]->header="User";
$elements[1]->alias="user";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`attach_userpollcomment`.`userpoll`";
$elements[2]->sort="1";
$elements[2]->header="User Poll";
$elements[2]->alias="userpoll";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`attach_userpollcomment`.`status`";
$elements[3]->sort="1";
$elements[3]->header="Status";
$elements[3]->alias="status";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`attach_userpollcomment`.`timestamp`";
$elements[4]->sort="1";
$elements[4]->header="Time stamp";
$elements[4]->alias="timestamp";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`attach_userpollcomment`.`content`";
$elements[5]->sort="1";
$elements[5]->header="Content";
$elements[5]->alias="content";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`attach_userpollcomment`.`creationdate`";
$elements[6]->sort="1";
$elements[6]->header="Creation Date";
$elements[6]->alias="creationdate";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`attach_userpollcomment`.`modificationdate`";
$elements[7]->sort="1";
$elements[7]->header="Modification Date";
$elements[7]->alias="modificationdate";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `attach_userpollcomment`");
$this->load->view("json",$data);
}
public function getsingleuserpollcomment()
{
$id=$this->input->get_post("id");
$data["message"]=$this->userpollcomment_model->getsingleuserpollcomment($id);
$this->load->view("json",$data);
}
function getalluserfollow()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`attach_userfollow`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`attach_userfollow`.`user`";
$elements[1]->sort="1";
$elements[1]->header="User";
$elements[1]->alias="user";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`attach_userfollow`.`userfollowed`";
$elements[2]->sort="1";
$elements[2]->header="User Followed";
$elements[2]->alias="userfollowed";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`attach_userfollow`.`timestamp`";
$elements[3]->sort="1";
$elements[3]->header="Time stamp";
$elements[3]->alias="timestamp";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`attach_userfollow`.`creationdate`";
$elements[4]->sort="1";
$elements[4]->header="Creation Date";
$elements[4]->alias="creationdate";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`attach_userfollow`.`modificationdate`";
$elements[5]->sort="1";
$elements[5]->header="Modification Date";
$elements[5]->alias="modificationdate";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `attach_userfollow`");
$this->load->view("json",$data);
}
public function getsingleuserfollow()
{
$id=$this->input->get_post("id");
$data["message"]=$this->userfollow_model->getsingleuserfollow($id);
$this->load->view("json",$data);
}
} ?>