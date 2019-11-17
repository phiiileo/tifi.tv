// Carousel functions 

//define parameters
let image_stack = $(".images");
let right_control = $(".fa-angle-right");
let left_control = $(".fa-angle-left");

// let right_control set next image active and remove active from current one



    right_control.on("click", function () {
    let active_img = $(".active_img");
    let next_slide = $(active_img.next());
    let next_slide2 = $(next_slide).next();
    let next_slide3 = $(next_slide2).next();
    active_img.removeClass("active_img");
    next_slide.addClass("active_img");
    next_slide2.addClass("img_container_2").removeClass("img_container_3");
    next_slide3.addClass("img_container_3");
    console.log(next_slide2);
    })


// let left_control set previous image active and remove active from current one
left_control.on("click", function () {
    let active_img = $(".active_img");
    let prev_slide = active_img.prev();

    prev_slide.addClass("active_img");
    active_img.removeClass("active_img");
    let next_slide = $(active_img.next());
    active_img.addClass("img_container_2");
    next_slide.addClass("img_container_3");
    console.log(active_img);
})


//   Effect on sort movies
let myDropdown = $(".myDropdown");
let dropdown_content = $(".dropdown_content");
let dropdown_content_items = dropdown_content.children();
myDropdown.on("click", function () {
    dropdown_content.toggle();

    for (i = 0; i < dropdown_content_items.length; i++) {
        $(dropdown_content_items[i]).on("click", function () {
            let value_source = $(this).text();
            let sort_value = $(this).children(".fa-check");
            dropdown_content_items.children(".fa-check").removeClass("sort_active")
            sort_value.toggleClass("sort_active");
            $(".myDropdown .filter_value").text(value_source);

        })
    }
})


// effects on movie lists
let state_icon = $(".state_icon");
let primary_state = $(".m_state .icons");
let saw_movie = $(".fa-check");
let watch_movie = $(".movie_tag");
for (i = 0; i < state_icon.length; i++) {

    $(state_icon[i]).css("cursor", "pointer").on("click", function () {
        $(this).toggleClass("active_state_icon");
        primary_state.css("z-index", "1")
    })

}

$(saw_movie).on("click", function () {
    let b = $(this).parents(".m_state").siblings(".seen").toggleClass("display_flex");
})

$(watch_movie).on("click", function () {
    $(this).parents(".m_state").siblings(".watch").toggleClass("display_flex");
    let b = $(this).parent().toggleClass("moveup");
})


