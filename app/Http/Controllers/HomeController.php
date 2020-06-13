<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Comment;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\UserAccount;
use Mail;
use Auth;
use Session;
use Illuminate\Support\Facades\Hash;

/**
 *
 */
class HomeController extends Controller {
	/**
	 *
	 */
	public function index(){
		$ban = Banner::where('status','1')->limit(2)->get();
		$newProduct = Product::orderBy('id','DESC')->whereIn('status',[1,3,4])->limit(8)->get();
		$randProduct = Product::inRandomOrder()->whereIn('status',[1,3,4])->limit(8)->get();
		$saleProduct = Product::where('sale_price','>',0)->whereIn('status',[1,3,4])->orderBy('id','DESC')->limit(8)->get();
		$soloPro = Product::orderBy('id','DESC')->whereIn('status',[1,3,4])->where('name','LIKE','%solo_pro%')->get();
		$studio = Product::orderBy('id','DESC')->whereIn('status',[1,3,4])->where('name','LIKE','%studio_3%')->get();
		$soloThree = Product::orderBy('id','DESC')->whereIn('status',[1,3,4])->where('name','LIKE','%solo_3%')->get();
		$ep = Product::orderBy('id','DESC')->whereIn('status',[1,3,4])->where('name','LIKE','%Beats_EP%')->get();
		$pro = Product::orderBy('id','DESC')->whereIn('status',[1,3,4])->where('name','LIKE','Beats_Pro%')->get();
		$powPro = Product::orderBy('id','DESC')->whereIn('status',[1,3,4])->where('name','LIKE','%powerbeats_pro%')->get();
		$powThree = Product::orderBy('id','DESC')->whereIn('status',[1,3,4])->where('name','LIKE','%powerbeats_3%')->get();
		$bx = Product::orderBy('id','DESC')->whereIn('status',[1,3,4])->where('name','LIKE','Beats_X%')->get();
		$urbeats = Product::orderBy('id','DESC')->whereIn('status',[1,3,4])->where('name','LIKE','%urbeats%')->get();
		$pill = Product::orderBy('id','DESC')->whereIn('status',[1,3,4])->where('name','LIKE','%Pill_2%')->get();
		$pillPlus = Product::orderBy('id','DESC')->whereIn('status',[1,3,4])->where('name','LIKE','%Pill_Plus%')->get();
		$data = Product::get();
		return view('index',compact('data','ban','newProduct','randProduct','saleProduct','soloPro','studio','soloThree','ep','pro','powPro','powThree','bx','urbeats','pill','pillPlus'));
	}

	public function shop(){	

		$data= Product::sortable()->whereIn('status',[1,3,4])->paginate(9);
		return view('shop',compact('data'));
	}
	public function about(){
		return view('about');
	}
	public function head(){
		$head = Product::sortable()->whereIn('status',[1,3,4])->where('category_id','12')->paginate(6);
		return view('shop')->with('data', $head);	
	}
	public function headl(){
		$headl = Product::sortable()->where('category_id','12')->where('status','4')->paginate(9);
		return view('shop')->with('data', $headl);	
	}
	public function solopro(){
		$solopro = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','%solo_pro%')->paginate(9);
		return view('shop')->with('data', $solopro);	
	}
	public function studio3(){
		$studio = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','%studio_3%')->paginate(9);
		return view('shop')->with('data', $studio);	
	}
	public function solo3(){
		$soloThree = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','%solo_3%')->paginate(9);
		return view('shop')->with('data', $soloThree);	
	}
	public function beatsep(){
		$ep = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','%Beats_EP%')->paginate(9);
		return view('shop')->with('data', $ep);	
	}
	public function beatspro(){
		$bpro = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','Beats_Pro%')->paginate(9);
		return view('shop')->with('data', $bpro);	
	}
	public function nba(){
		$nba = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','%NBA_Collection%')->paginate(9);
		return view('shop')->with('data', $nba);	
	}
	public function matte(){
		$matte = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','%Matte_Collection%')->paginate(9);
		return view('shop')->with('data', $matte);	
	}
	public function camo(){
		$camo = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','%Camo_Collection%')->paginate(9);
		return view('shop')->with('data', $camo);	
	}
	public function club(){
		$club = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','%Club%')->paginate(9);
		return view('shop')->with('data', $club);	
	}
	public function ear(){
		$ear = Product::sortable()->whereIn('status',[1,3,4])->where('category_id','15')->paginate(9);
		return view('shop')->with('data', $ear);	
	}
	public function earl(){
		$earl = Product::sortable()->where('category_id','15')->where('status','4')->paginate(9);
		return view('shop')->with('data', $earl);	
	}
	public function powpro(){
		$powPro = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','%powerbeats_pro%')->paginate(9);
		return view('shop')->with('data', $powPro);	
	}
	public function beatsx(){
		$bx = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','Beats_X%')->paginate(9);
		return view('shop')->with('data', $bx);	
	}
	public function pow3(){
		$powThree = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','%powerbeats_3%')->paginate(9);
		return view('shop')->with('data', $powThree);	
	}
	public function urbeats(){
		$urbeats = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','%urbeats%')->paginate(9);
		return view('shop')->with('data', $urbeats);	
	}
	public function speaker(){
		$speaker = Product::sortable()->whereIn('status',[1,3,4])->where('category_id','16')->paginate(9);
		return view('shop')->with('data', $speaker);	
	}
	public function spel(){
		$spel = Product::sortable()->where('category_id','16')->where('status','4')->paginate(9);
		return view('shop')->with('data', $spel);	
	}
	public function pill2(){
		$pill = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','%Pill_2%')->paginate(9);
		return view('shop')->with('data', $pill);	
	}
	public function pplus(){
		$pillPlus = Product::sortable()->whereIn('status',[1,3,4])->where('name','LIKE','%Pill_Plus%')->paginate(9);
		return view('shop')->with('data', $pillPlus);	
	}	
	public function view_pro($id,$slug){
		$product = Product::where(['slug'=>$slug,'id'=>$id])->get();
		$randProduct = Product::inRandomOrder()->whereIn('status',[1,3,4])->limit(8)->get();
		$comment = Comment::orderBy('comment.id','DESC')->where('product_id',$id)->where('comment.status','1')->join('users','comment.user_email','users.email')->paginate(4);
		$rate = Comment::where('product_id',$id)->where('status','1')->sum('rating');
		$cat = Category::where('slug',$slug)->first();
		if ($comment->total() > 0) {
			$updateRat = Product::where('id', $id)->update([
			'product_rating' => $rate/($comment->total()),
		]);
		}
		if ($cat) {
			// san pham theo danh muc
			$newProduct = Product::orderBy('id','DESC')->whereIn('status',[1,3,4])->where('category_id',$id)->paginate(2);
			return view('shop',compact('newProduct','cat'));
		}else if($product){
			// chi tiet san pham
			return view('product-details',compact('product','comment','rate','randProduct'));
		}else{
			return view('404');
		}
		
	}

	public function search(){
		$key = request()->key;
		$select = request()->select;
		if ($select == 2) {
		$searchProduct = Product::sortable()->where('category_id','=','12')->whereIn('status',[1,3,4])->where('name','LIKE','%'.$key.'%')->paginate(6);
		} elseif ($select == 4) {
			$searchProduct = Product::sortable()->where('category_id','=','16')->whereIn('status',[1,3,4])->where('name','LIKE','%'.$key.'%')->paginate(6);
		} elseif ($select == 3) {
			$searchProduct = Product::sortable()->where('category_id','=','15')->whereIn('status',[1,3,4])->where('name','LIKE','%'.$key.'%')->paginate(6);
		} else {
			$searchProduct = Product::sortable()->where('name','LIKE','%'.$key.'%')->whereIn('status',[1,3,4])->paginate(6);
		}
			return view('search',compact('searchProduct'));
	}

	public function contact() {
		return view('contact');
	}
	public function post_contact(Request $req) {
		Mail::send('mail.contact',[
			'name' =>$req->name,
			'content' =>$req->content,
			'email' => $req->email,
		], function($mail) use($req) {
					$mail->to('whysoserious245@gmail.com',$req->name);
					$mail->from($req->email);
					$mail->subject($req->subject);
		});
		return redirect()->route('contact')->with('success','Mail sent successfully');
	}
	public function error() {
		return view('404');
	}
	public function policy() {
		return view('policy');
	}
	public function intship() {
		return view('intship');
	}
	public function secshop() {
		return view('secshop');
	}
	public function deliinfo() {
		return view('deliinfo');
	}
	public function shipret() {
		return view('shipret');
	}
	public function faq() {
		return view('faq');
	}
	public function register() {
		return view('register');
	}
	public function post_register(Request $req) {
		$this->validate($req,[
			'email'=>'required|email|unique:users',
			'password'=>'required|confirmed|min:6'
		],[
			'email.required'=>'Email is required',
			'email.email' => 'Email not correct',
			'email.unique'=>'Email already exists',
			'password.required'=>'Password is required',
			'password.min'=>'Password must be more than 6 characters'
		]);
		$password = bcrypt($req->password);
		$req->merge(['password'=>$password]);
		UserAccount::create($req->all());
		return redirect()->route('login')->with('success','Register successfully');
	}
	public function login() {
		return view('login');
	}
	public function post_login(Request $req) {
		$this->validate($req,[
			'email' => 'required',
			'password' => 'required',
		],[
			'email.required' => 'Email is required',
			'password.required' => 'Password is required',
		]);
		if (Auth::guard('useracc')->attempt($req->only('email','password'),$req->remember)) {
			return redirect()->route('home');
		} else {
			return redirect()->back()->withErrors('Wrong login information');
		}
	}
	public function logout() {
		Auth::guard('useracc')->logout();
		return redirect()->route('home');
	}

	public function checkout() {
		return view('checkout');
	}
	public function account() {
		$em = Auth::guard('useracc')->user()->email;
		$userOrder = Order::orderBy('id','DESC')->where('email','LIKE',$em)->where('total','>',0)->paginate(10);
		$userAcc = UserAccount::orderBy('id','DESC')->where('email','LIKE',$em)->get();
		return view('my-account',compact('userOrder','userAcc'));
	
	}
	public function filterPrice(Request $request) {
		$req = $request->all();
		$range = $request->price_range;
		$price = explode(';',$range);
		
		$minPrice = $price[0];
		$maxPrice = $price[1];
		if (isset($req['head']) && !isset($req['ear']) && !isset($req['speak'])) {
		$filter = Product::sortable()->whereBetween('price', [$minPrice, $maxPrice])->where('category_id','12')->whereIn('status',[1,3,4])->paginate(6); 
		} elseif (isset($req['head']) && isset($req['ear']) && !isset($req['speak'])) {
			$filter = Product::sortable()->whereBetween('price', [$minPrice, $maxPrice])->whereIn('category_id',[12,15])->whereIn('status',[1,3,4])->paginate(6);
		} elseif (isset($req['head']) && !isset($req['ear']) && isset($req['speak'])) {
			$filter = Product::sortable()->whereBetween('price', [$minPrice, $maxPrice])->whereIn('category_id',[12,16])->whereIn('status',[1,3,4])->paginate(6);
		} elseif (!isset($req['head']) && isset($req['ear']) && !isset($req['speak'])) {
			$filter = Product::sortable()->whereBetween('price', [$minPrice, $maxPrice])->where('category_id','15')->whereIn('status',[1,3,4])->paginate(6);
		} elseif (!isset($req['head']) && isset($req['ear']) && isset($req['speak'])) {
			$filter = Product::sortable()->whereBetween('price', [$minPrice, $maxPrice])->whereIn('category_id',[15,16])->whereIn('status',[1,3,4])->paginate(6);
		} elseif (!isset($req['head']) && !isset($req['ear']) && isset($req['speak'])) {
			$filter = Product::sortable()->whereBetween('price', [$minPrice, $maxPrice])->where('category_id','16')->whereIn('status',[1,3,4])->paginate(6);
		} else {
			$filter = Product::sortable()->whereBetween('price', [$minPrice, $maxPrice])->whereIn('status',[1,3,4])->paginate(6); 
		}
		return view('shop-filter',compact('minPrice','maxPrice'))->with('data', $filter);	
	}
	public function changeAvatar(Request $request) {
		// upload ảnh
		$em = Auth::guard('useracc')->user()->email;
		$getava = '';
		if($request->hasFile('avatar')){
		//Hàm kiểm tra dữ liệu
		$this->validate($request, 
			[
				//Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
				'avatar' => 'mimes:jpg,jpeg,png,gif',
			],			
			[
				//Tùy chỉnh hiển thị thông báo không thõa điều kiện
				'avatar.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
			]
		);
		
		//Lưu hình ảnh vào thư mục
		$ava = $request->file('avatar');
		$getava = $ava->getClientOriginalName();
		$destinationPath = public_path('assets/img/avatar');
		$ava->move($destinationPath, $getava);
		$avaUpdateToDatabase = array(
			'avatar' => $getava,
		);
		$updateAva = UserAccount::where('email', $em)->update($avaUpdateToDatabase);
		if ($updateAva) {
			Session::flash('success', 'Update successfully!');
		} else {                        
			Session::flash('error', 'Update failed!');
		}
	
			return redirect()->back();
	}
	}
	public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::guard('useracc')->user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::guard('useracc')->user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }

}

?>