<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    /**
     *  The PageController is used as main Routes Controller
     *  this is done in order to keep web.php small and easy to read.
     */
//
   /** Apollo home-Page */
    public function Home(){
        return view('Pages.Home.index');
    }
   /** Rederect to mcforum website */
    public function McForum(){
        return redirect()->away('https://www.minecraftforum.net/forums/servers-java-edition/pc-servers/3022300-the-world-of-apollo-1-17-1-semi-vanilla-survival');
    }
   /** Apollo Discord join link  */
    public function Discord(){
        return redirect()->away('https://discord.gg/rCBwKTQ');
    }
   /** Apollo Wiki-Page */
    public function Wiki(){
        return view('Pages.Wiki.index');
    }
   /** Apollo Wiki-Page */
    public function Blog(){
        return view('Pages.Blog.index');
    }    
   /** Apollo Wiki-Page */
    public function Dynmap(){
        return view('Pages.Dynmap.index');
    }    
}