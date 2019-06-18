<?php
/**
 * Template part for displaying fragment of "tell us your story"
 *
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */

get_header();

?>

<div class="container-fluid main-bg-img p-tb-100">
    <div class="container">
        <h2 class="main-text-color">TELL US YOUR STORY</h2>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" placeholder="Your name" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Your email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="user-message" id="user-message" class="form-control" rows="6" placeholder="Enter your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-main">SEND MESSAGE</button>
                </div>
                <div class="col-md-6">
                    <div class="d-block d-sm-none p-tb-30"></div>
                    <address class="main-text-color2" style="font-size: 1.76em">
                        <span>Phone: </span> <a href="tel:+ 65 65381112" class="main-text-color">+ 65 65381112</a><br>
                        <span>Email: globaltechsgl@gmail.com</span> <br />
                        <span>Head Office: 302 Victoria house, Victoria, Mahe, Seychelles</span> <br />
                        <span>Office Add: 33UBI Avenue 3# 08-13 Vertex, Singapore (408868)</span>
                    </address>
                </div>
            </div>
        </form>
    </div>
</div>