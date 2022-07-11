@extends('index')
@section('title', 'Feedback')

@section('css')
    <style>
        .feedback-container {
            display: grid;
            grid-template-columns: 3fr 1fr;
            padding: 40px;
        }
        .container {
            padding-right: 20px;
        }
        .form-feedback {
            display: grid;
            grid-template-rows: 1fr;
            gap: 1em;
            padding-bottom: 10px;
        }
        .form-feedback > input {
            height: 2.5rem;
            border-radius: 10px;
        }
        .form-feedback > input, textarea {
            width: 100%;
            background-color: transparent;
            color: #fff;
            border: 1px solid grey;
            padding: 10px;
            
        }
        textarea {
            border-radius: 10px 0 0 10px;
        }
        textarea::-webkit-scrollbar {
            width: 0.1em;
        }
        
        textarea::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }
        
        textarea::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            outline: 1px solid slategrey;
            border-radius: 5px;
        }

        .col > input[type="submit"] {
            background-color: #778899;
            color: #fff;
            padding: 5px;
            border-radius: 5px;
            float: right;
        }
        
        .card {
            border: 1px solid grey;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 2px -2px #778899;
        }
        .author {
            font-size: 0.8rem;
        }

        @media (max-width: 992px) {
            .feedback-container {
                grid-template-columns: 1fr;
                padding: 10px;
            }
        }

        @media (min-width: 992px) {
            article {
                padding: 0 40px 40px 40px;
            }
        }
    </style>
@endsection

@section('content')

    <section class="feedback-container">
    <article>
            <h1>Comments</h1>
            <div class="card">
                <h3>Japan</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Doloremque voluptatum enim quam eaque nemo corporis commodi ad natus, veniam alias, 
                    praesentium voluptas. Blanditiis error ipsam expedita dolore quo cumque quibusdam 
                    necessitatibus magni, mollitia vero at culpa temporibus, labore debitis nesciunt, 
                    omnis dolorem! Accusamus unde illum id quaerat magnam deserunt asperiores?
                </p>
                <span class="author">- John Doe</span>
            </div>
            <div class="card">
                <h3>Sri Lanka</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Doloremque voluptatum enim quam eaque nemo corporis commodi ad natus, veniam alias, 
                    praesentium voluptas. Blanditiis error ipsam expedita dolore quo cumque quibusdam 
                    necessitatibus magni, mollitia vero at culpa temporibus, labore debitis nesciunt, 
                    omnis dolorem! Accusamus unde illum id quaerat magnam deserunt asperiores?
                </p>
                <span class="author">- Jane Doe</span>
            </div>
            <div class="card">
                <h3>Facebook</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Doloremque voluptatum enim quam eaque nemo corporis commodi ad natus, veniam alias, 
                    praesentium voluptas. Blanditiis error ipsam expedita dolore quo cumque quibusdam 
                    necessitatibus magni, mollitia vero at culpa temporibus, labore debitis nesciunt, 
                    omnis dolorem! Accusamus unde illum id quaerat magnam deserunt asperiores?
                </p>
                <span class="author">- John Smith</span>
            </div>

        </article>

        <div class="container">
            <div class="col">
                <h1>Join the conversation!</h1>
                <form method="post" class="form-feedback" id="comment-form">
                    <label for="name">Name:</label>
                    <input type="text" placeholder="John Doe">
                    <label for="subject">Subject:</label>
                    <input type="text" placeholder="Current news"> 
                </form>
                <label for="comment">Comment:</label> <br><br>
                <textarea name="comment" form="comment-form" rows="10" placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Doloremque voluptatum enim quam eaque nemo corporis commodi ad natus, veniam alias, 
                        praesentium voluptas. Blanditiis error ipsam expedita dolore quo cumque quibusdam 
                        necessitatibus magni, mollitia vero at culpa temporibus, labore debitis nesciunt, 
                        omnis dolorem! Accusamus unde illum id quaerat magnam deserunt asperiores?"></textarea> <br>
                <input type="submit" form="comment-form">
            </div>
        </div>

        

    </section>

@endsection