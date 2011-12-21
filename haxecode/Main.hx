extern class Controller {
  var response:Dynamic;
}

extern class Request {
  public static function factory(url:String):Dynamic {}
}

extern class Response {
  
}

extern class Controller_Template extends Controller {
  var template:Dynamic;
  public function new(request:Dynamic,response:Dynamic):Void {}
  public function after():Void {}
  public function before():Void {}
  
}

class Controller_Welcome extends Controller_Template {
  
  public function new(request,response) {
    template="site";
    super(request,response);
  }
  
  public override function before() {
    trace("ciao");
    super.before();
  }
  
  public override function after() {
    trace("ciao");
    super.after();
  }
  
  
  public function action_index() {
		response.body('hello, world!');
	}
	
  
  public function action_ciao() {
    template.message = Request.factory("http://wwww.google.com").execute();
	}
  
}

class Main {
  
  public static function main() {
    trace("ciao");
  }
}