/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

import PostJson from 'interfaces/news-post-json';
import { route } from 'laroute';
import * as moment from 'moment';
import * as React from 'react';
import { StringWithComponent } from 'string-with-component';

export default function PostItem({modifiers, post}: {modifiers?: string[], post: PostJson}) {
  let cover;

  if (post.first_image != null) {
    cover = <img className='news-card__cover' src={post.first_image} />;
  }

  let preview = post.preview;

  if (preview == null) {
    preview = '';
  }

  return (
    <a
      className={osu.classWithModifiers('news-card', modifiers ?? ['index', 'hover'])}
      href={route('news.show', { news: post.slug })}
    >
      <div className='news-card__cover-container'>
        {cover}
        <div
          className='news-card__time js-tooltip-time'
          title={post.published_at}
        >
          {moment.utc(post.published_at).format('ll')}
        </div>
      </div>

      <div className='news-card__main'>
        <div className='news-card__row news-card__row--title'>{post.title}</div>
        <div
          className='news-card__row news-card__row--preview'
          dangerouslySetInnerHTML={{ __html: preview }}
        />
        <div className='news-card__row news-card__row--author'>
          <StringWithComponent
            pattern={osu.trans('news.show.by')}
            mappings={{ ':user': <strong key='author'>{post.author}</strong> }}
          />
        </div>
      </div>
    </a>
  );
}
