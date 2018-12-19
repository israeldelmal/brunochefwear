<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use File;

use App\User;
use App\Metadata;
use App\Header;
use App\About;
use App\Contact;
use App\Article;
use App\Nosotros;

class DashboardController extends Controller
{
	// Index
    public function index()
    {
        $usrs  = User::all();
        $arts  = Article::all();
        $elmts = Nosotros::all();

        $users    = User::orderBy('id', 'DESC')->limit(5)->get();
        $articles = Article::orderBy('id', 'DESC')->limit(5)->get();
        $elements = Nosotros::orderBy('id', 'DESC')->limit(2)->get();
        
    	return view('dashboard.index.index')
                ->with('usrs', $usrs)
                ->with('arts', $arts)
                ->with('elmts', $elmts)
                ->with('users', $users)
                ->with('articles', $articles)
                ->with('elements', $elements);
    }

    // Usuarios
    public function users()
    {
        $users = User::orderBy('id', 'DESC')->simplePaginate(10);
        return view('dashboard.users.index')
                ->with('users', $users);
    }

    public function users_edit($id)
    {
        $user = User::find($id);
        return view('dashboard.users.edit')
                ->with('user', $user);
    }

    // Usuario
    public function user($id)
    {
        $user = User::find($id);
        return view('dashboard.users.user')
                ->with('user', $user);
    }

    public function user_update(Request $request, $id)
    {
        $user = User::find($id);

        $rules = [
            'email'        => 'required|email|unique:users,email,'.$user->id,
            'name'         => 'required|min:4',
            'lastname'     => 'required|min:4'
        ];

        $messages = [            
            'email.required'    => 'Este campo es requerido',
            'email.email'       => 'No tiene formato de email',
            'email.unique'      => 'Ya existe está registrado este correo',
            
            'name.required'     => 'Este campo es requerido',
            'name.min'          => 'Mínimo 4 caracteres',
            
            'lastname.required' => 'Este campo es requerido',
            'lastname.min'      => 'Mínimo 4 caracteres'
        ];

        $request->validate($rules, $messages);

        if ($request->email != auth()->user()->email) {
            $user->email = $request->email;
        }

        if ($request->name != auth()->user()->name) {
            $user->name = $request->name;
        }

        if ($request->lastname != auth()->user()->lastname) {
            $user->lastname = $request->lastname;
        }

        if ($user->save()) {
            if ($request->email != auth()->user()->email) {
                auth()->logout();
                return redirect('/escritorio');
            } else {
                return redirect()->back();
            }
        }
    }

    // Metadatos
    public function metadata()
    {
        $meta = Metadata::find('1');
        return view('dashboard.metadata.edit')
                ->with('meta', $meta);
    }

    public function metadata_update(Request $request)
    {
        $rules = [
            'title'       => 'required|min:4',
            'description' => 'required|min:4|max:155',
            'keywords'    => 'required|min:2'
        ];

        $messages = [            
            'title.required'       => 'Este campo es necesario',
            'title.min'            => 'Mínimo 4 caracteres',
            
            'description.required' => 'Este campo es necesario',
            'description.min'      => 'Mínimo 4 caracteres',
            'description.max'      => 'Máximo 155 caracteres',
            
            'keywords.required'    => 'Este campo es necesario',
            'keywords.min'         => 'Mínimo 2 caracteres'
        ];

        $request->validate($rules, $messages);

        Metadata::find('1')->update($request->all());

        return redirect()->back();
    }

    // Cabecera
    public function header()
    {
        $header = Header::find('1');
        return view('dashboard.home.header')
                ->with('header', $header);
    }

    public function header_update(Request $request)
    {
        $rules = [
            'h1'  => 'required|min:4',
            'sub' => 'required|min:4',
            'p'   => 'required|min:4',
            'img' => 'mimes:jpg,png,jpeg|max:5000|dimensions:max_width=1920,min_width=1920,min_height=1080,max_height=1080',
        ];

        $messages = [            
            'h1.required'    => 'Este campo es necesario',
            'h1.min'         => 'Mínimo 4 caracteres',
            
            'sub.required'   => 'Este campo es necesario',
            'sub.min'        => 'Mínimo 4 caracteres',
            
            'p.required'     => 'Este campo es necesario',
            'p.min'          => 'Mínimo 4 caracteres',
            
            'img.mimes'      => 'Sólo imágenes JPG, JPEG y PNG',
            'img.max'        => 'Peso máximo de 5MB',
            'img.dimensions' => 'Las medidas son de 1920x1080'
        ];

        $request->validate($rules, $messages);

        $header      = Header::find('1');
        $header->h1  = $request->h1;
        $header->sub = $request->sub;
        $header->p   = $request->p;

        if ($request->hasFile('img')) {
            File::delete(public_path() . '/assets/images/cabecera/' . $header->img);

            $image = $request->file('img');
            $name  = uniqid('header_', true) . '.' . $image->getClientOriginalExtension();
            $path  = public_path() . '/assets/images/cabecera/';
            $image->move($path, $name);

            $header->img = $name;
        }

        $header->save();

        return redirect()->back();
    }

    // Nosotros
    public function about()
    {
        $about = About::find('1');
        return view('dashboard.home.about')
                ->with('about', $about);
    }

    public function about_update(Request $request)
    {
        $rules = [
            'h1'  => 'required|min:4',
            'img' => 'mimes:jpg,png,jpeg|max:5000|dimensions:max_width=1920,min_width=1920,min_height=1080,max_height=1080',
        ];

        $messages = [            
            'h1.required'    => 'Este campo es necesario',
            'h1.min'         => 'Mínimo 4 caracteres',
            
            'img.mimes'      => 'Sólo imágenes JPG, JPEG y PNG',
            'img.max'        => 'Peso máximo de 5MB',
            'img.dimensions' => 'Las medidas son de 1920x1080'
        ];

        $request->validate($rules, $messages);

        $about     = About::find('1');
        $about->h1 = $request->h1;

        if ($request->hasFile('img')) {
            File::delete(public_path() . '/assets/images/nosotros/' . $about->img);

            $image = $request->file('img');
            $name  = uniqid('about_', true) . '.' . $image->getClientOriginalExtension();
            $path  = public_path() . '/assets/images/nosotros/';
            $image->move($path, $name);

            $about->img = $name;
        }

        $about->save();

        return redirect()->back();
    }

    // Contacto
    public function contact()
    {
        $contact = Contact::find('1');   
        return view('dashboard.home.contact')
                ->with('contact', $contact);
    }

    public function contact_update(Request $request)
    {
        $rules = [
            'h1'  => 'required|min:4',
            'img' => 'mimes:jpg,png,jpeg|max:5000|dimensions:max_width=1920,min_width=1920,min_height=1080,max_height=1080',
        ];

        $messages = [            
            'h1.required'    => 'Este campo es necesario',
            'h1.min'         => 'Mínimo 4 caracteres',
            
            'img.mimes'      => 'Sólo imágenes JPG, JPEG y PNG',
            'img.max'        => 'Peso máximo de 5MB',
            'img.dimensions' => 'Las medidas son de 1920x1080'
        ];

        $request->validate($rules, $messages);

        $contact     = Contact::find('1');
        $contact->h1 = $request->h1;

        if ($request->hasFile('img')) {
            File::delete(public_path() . '/assets/images/contacto/' . $contact->img);

            $image = $request->file('img');
            $name  = uniqid('contact_', true) . '.' . $image->getClientOriginalExtension();
            $path  = public_path() . '/assets/images/contacto/';
            $image->move($path, $name);

            $contact->img = $name;
        }

        $contact->save();

        return redirect()->back();
    }

    // Artículos
    public function articles()
    {
    	$articles = Article::orderBy('id', 'DESC')->simplePaginate(10);
    	return view('dashboard.articles.index')
    			->with('articles', $articles);
    }

    public function articles_create()
    {
    	return view('dashboard.articles.create');
    }

    public function articles_store(Request $request)
    {
    	$rules = [
            'title'       => 'required|min:4',
            'slug'        => 'unique:articles,slug',
            'content'     => 'required|min:4',
            'img'         => 'required|mimes:jpg,png,jpeg|max:2000|dimensions:max_width=1920,min_width=1920,min_height=1080,max_height=1080',
            'description' => 'required|min:4|max:155',
            'keywords'    => 'required|min:2'
        ];

        $messages = [            
            'required'       => 'Este campo es necesario',
            'min'            => 'Mínimo :min caracteres',
            'max'            => 'Máximo :max caracteres',
            
            'slug.unique'    => 'Ya existe esta URL, prueba otra',
            
            'content.min'    => 'Mínimo 4 caracteres',
            
            'img.mimes'      => 'Sólo imágenes JPG, JPEG y PNG',
            'img.max'        => 'Peso máximo de 2MB',
            'img.dimensions' => 'Las medidas son de 1920x1080'
        ];

        $request->validate($rules, $messages);

        $image = $request->file('img');
        $name  = uniqid('article_', true) . '.' . $image->getClientOriginalExtension();
        $path  = public_path() . '/assets/images/articulos/';
        $image->move($path, $name);

        Article::create([
            'title'       => $request->title,
            'slug'        => str_slug($request->title),
            'content'     => html_entity_decode($request->content),
            'img'         => $name,
            'description' => $request->description,
            'keywords'    => $request->keywords,
            'user_id'     => auth()->user()->id
        ]);

        return redirect('/escritorio/articulos');
    }

    public function articles_edit($id)
    {
    	$article = Article::find($id);
    	return view('dashboard.articles.edit')
    			->with('article', $article);
    }

    public function articles_update(Request $request, $id)
    {
        $article = Article::find($id);

        $rules = [
            'title'       => 'required|min:4',
            'slug'        => 'unique:articles,slug,'.$article->id,
            'content'     => 'required|min:4',
            'img'         => 'mimes:jpg,png,jpeg|max:2000|dimensions:max_width=1920,min_width=1920,min_height=1080,max_height=1080',
            'description' => 'required|min:4|max:155',
            'keywords'    => 'required|min:2'
        ];

        $messages = [            
            'required'       => 'Este campo es necesario',
            'min'            => 'Mínimo :min caracteres',
            'max'            => 'Máximo :max caracteres',
            
            'slug.unique'    => 'Ya existe esta URL, prueba otra',
            
            'content.min'    => 'Mínimo 4 caracteres',
            
            'img.mimes'      => 'Sólo imágenes JPG, JPEG y PNG',
            'img.max'        => 'Peso máximo de 2MB',
            'img.dimensions' => 'Las medidas son de 1920x1080'
        ];

        $request->validate($rules, $messages);

        $article->title = $request->title;
        $article->slug  = str_slug($request->title);

        if ($request->hasFile('image')) {
            File::delete(public_path() . '/assets/images/articulos/' . $article->image);

            $image = $request->file('image');
            $name  = uniqid('article_', true) . '.' . $image->getClientOriginalExtension();
            $path  = public_path() . '/assets/images/articulos/';
            $image->move($path, $name);

            $article->image = $name;
        }

        $article->content     = html_entity_decode($request->content);
        $article->description = $request->description;
        $article->keywords    = $request->keywords;
        $article->status      = $request->status;
        $article->save();

        return redirect('/escritorio/articulos');
    }

    // Nosotros
    public function abouts()
    {
        $nosotros = Nosotros::orderBy('id', 'DESC')->simplePaginate(10);
        return view('dashboard.about.index')
                ->with('nosotros', $nosotros);
    }

    public function abouts_create()
    {
        return view('dashboard.about.create');
    }

    public function abouts_store(Request $request)
    {
        $rules = [
            'h1'      => 'required|min:2',
            'content' => 'required|min:4',
        ];

        $messages = [
            'required' => 'Este campo es necesario',
            'min'      => 'Mínimo :min caracteres'
        ];

        $request->validate($rules, $messages);

        Nosotros::create([
            'h1'      => $request->h1,
            'content' => html_entity_decode($request->content),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/escritorio/about');
    }

    public function abouts_edit($id)
    {
        $nosotros = Nosotros::find($id);
        return view('dashboard.about.edit')
                ->with('nosotros', $nosotros);
    }

    public function abouts_update(Request $request, $id)
    {
        $rules = [
            'h1'      => 'required|min:2',
            'content' => 'required|min:4',
            'status'  => 'required'
        ];

        $messages = [
            'required' => 'Este campo es necesario',
            'min'      => 'Mínimo :min caracteres'
        ];

        $request->validate($rules, $messages);

        Nosotros::find($id)->update([
            'h1'      => $request->h1,
            'content' => html_entity_decode($request->content),
            'status'  => $request->status
        ]);

        return redirect('/escritorio/about');
    }
}
