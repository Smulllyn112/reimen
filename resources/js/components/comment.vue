<template>
     <div class="form-a" >

          <div class="form-comments">
            <div class="title-box-d">
              <h3 class="title-d">@lang('comments.leave_reply')</h3>
            </div>
            <form class="form-a">
              <div class="row">
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <label for="inputUrl">@lang('comments.enter_name') </label>
                    <input type="text" class="form-control form-control-lg form-control-a"  placeholder="..." required name="commenter">
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <label >@lang('comments.enter_message')</label>
                    <textarea  class="form-control" placeholder="..." cols="45"
                      rows="8" required name="description"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" @click.prevent="send" class="btn btn-a">@lang('comments.send_button')</button>
                </div>
              </div>
            </form>
          </div>
        </div>
     </div>
  
</template>


<script type="text/javascript">
export default{
  props:['action_route','placeholder_name','placeholder_email','product_name','placeholder_message','route_data_handling','','accepted_terms','send_button'],
  data(){
    return{
      name:null,
      email:null,
      message:null,
      //product_title:null,
      accepted:false
    }
  },
  methods:{
    send(){ //action_route
            axios.post(this.action_route, { // 
                name: this.name,
                email: this.email,
                message: this.message,
                accepted:this.accepted,
                product_name:this.product_name
                //product_title: this.product_title,
            })
            .then(res => {   
                //console.log(res);             
                this.name=null,
                this.email=null,
                this.message=null,
                this.product_title=null,
                this.accepted=false,
                //alert("hohh");
                this.$toast.success(res.data.message, "Sucess", { timeout: 3000 });
            })
            .catch(err => {
              alert("joj");


                //console.log(err.response);  // a data / message résznél irná ki. A HIBAUZENETET.
                //alert(err.response.data.message);
                this.$toast.error(err.response.data.message, "Error", { timeout: 3000 });               
            }); // de lehetne put is. A masodik az axios után a metodus neve. A `` kormok az template literal, ami a string interpolationt konnyebbé teszi. A catch akkor put le, ha a patch metodusban error van.
    }
  }

}


</script>








    <form class="form-a" method="POST" >
      <div class="row">
        <div class="col-md-12 mb-1">
          <div class="form-group">
            <input type="text" class="form-control form-control-lg form-control-a" id="inputName" name="name"
              :placeholder="placeholder_name" required>
          </div>
        </div>
        <div class="col-md-12 mb-1">
          <div class="form-group">
            <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1" name="email"
              placeholder="placeholder_email" required>
            <input type="hidden" value="product_title" name="product_name" >
          </div>
        </div>
        <div class="col-md-12 mb-1">
          <div class="form-group">
            <textarea id="textMessage" class="form-control" placeholder="placeholder_message" name="message" cols="45"
              rows="8" required></textarea>
          </div>
        </div>
        <div class="col-md-12">

        <div class="form-group">
          <input type="checkbox" name="accepted" value="1" required> <a :href="route_data_handling" target="_blank">{{accepted_terms}} </a>
        </div>

          <button type="submit" class="btn btn-a" class="ml-3">{{send_button}}</button>
        </div>

      </div>
    </form>