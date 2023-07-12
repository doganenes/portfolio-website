<div id="contact" class="row content content-3  h-100 pt-4 pb-5">
    <div class="col">
        <div class="title text-center text-dark fw-bold">Contact Me</div>
        <div>
            <form action="{{ route('contact.send') }}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-borderless">
                    <tr>
                        <label for="name">
                            <td class="text-center fs-4">Name:</td>
                        </label>
                        <td><input class="form-control form-control-lg" type="text" name="name"
                                placeholder="Your name.." required />
                        </td>
                    </tr>
                    <tr>
                        <label for="email">
                            <td class="text-center fs-4">Email:</td>
                        </label>
                        <td><input class="form-control form-control-lg" type="email" name="email"
                                placeholder="Your email address.." required />
                        </td>
                    </tr>
                    <tr>
                        <label for="subject">
                            <td class="text-center fs-4">Subject:</td>
                        </label>
                        <td><input class="form-control form-control-lg" type="text" name="subject"
                                placeholder="Your subject.." required />
                        </td>
                    </tr>
                    <tr>
                        <label for="message">
                            <td class="text-center fs-4">Message:</td>
                        </label>
                        <td>
                            <textarea class="form-control form-control-lg" cols="30" rows="5" name="message" placeholder="Your message.."
                                required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="buttonTD">
                            <button class="btn btn-dark btn-lg sendBtn" type="submit">
                                Send
                            </button>
                        </td>
                    </tr>
                    @if (session('message_sent'))
                        <br />
                        <div class="alert alert-success">
                            {{ session('message_sent') }}
                        </div>
                    @endif
                </table>
            </form>
        </div>
    </div>
</div>
