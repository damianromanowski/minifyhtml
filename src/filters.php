<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::after(function($request, $response)
{
    if (App::Environment() != 'local' && Config::get('minifyhtml::enabled'))
    {
        if ($response instanceof Illuminate\Http\Response)
        {
            $re = '%            # Collapse ws everywhere but in blacklisted elements.
	            (?>             # Match all whitespans other than single space.
	              [^\S ]\s*     # Either one [\t\r\n\f\v] and zero or more ws,
	            | \s{2,}        # or two or more consecutive-any-whitespace.
	            ) # Note: The remaining regex consumes no text at all...
	            (?=             # Ensure we are not in a blacklist tag.
	              (?:           # Begin (unnecessary) group.
	                (?:         # Zero or more of...
	                  [^<]++    # Either one or more non-"<"
	                | <         # or a < starting a non-blacklist tag.
	                  (?!/?(?:textarea|pre)\b)
	                )*+         # (This could be "unroll-the-loop"ified.)
	              )             # End (unnecessary) group.
	              (?:           # Begin alternation group.
	                <           # Either a blacklist start tag.
	                (?>textarea|pre)\b
	              | \z          # or end of file.
	              )             # End alternation group.
	            )  				# If we made it here, we are not in a blacklist tag.
	            %ix';
	        
        	$output = preg_replace($re, ' ', $response->getOriginalContent());

            $response->setContent($output);
        }
    }
});