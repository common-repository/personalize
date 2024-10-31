=== Personalize ===
Contributors: innoport
Tags: personalization, marketing, marketing
Requires at least: 4.0
Tested up to: 4.9.6
Stable tag: 0.2
Requires PHP: 5.0
License: GPLv2 or later

Simple personalization tools for Wordpress.

== Description ==
Simple personalization of any text in page, post or any other content type that support shortcodes.

### Shortcode: personalize

Use this to replace text based on parameters from the URL. Example below.

**Attributes:**

*Param* (string): The URL variable you want to hold the value for personalization.

### Sample usage

Personalize location based on URL:

> Mall in [personalize param=&quot;location&quot;]Los Angeles[/personalize]!

This will output &quot;Mall in Los Angeles!&quot; if no parameter is set.

To personalize the location of the mall to your visitor add the &quot;location&quot; parameter to your URL.
> https://example.com?location=San Francisco

**Personalized output: &quot;Mall in San Francisco!&quot;**